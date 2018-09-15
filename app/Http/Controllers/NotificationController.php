<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Account;
use App\Config;
use App\Notification;
use App\Gift;
use App\Transaction;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;

class NotificationController extends Controller
{

    private $_configs;

    public function __construct()
    {
        $this->_configs = Config::find(1);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, Request $request)
    {
        $gift = Gift::findOrFail($id);
        if (Auth::user()->id == $gift->account->id) goto out;
        if (Auth::user()->id != $request->get('id')) goto out;
        if ($request->get('id') == $gift->account->id) goto out;
        $email = $gift->account->account->email;
        $transaction = Transaction::create([
            'owner_id' => $gift->account->id,
            'buyer_id' => Auth::user()->id,
            'gift_id' => $gift->id,

            'message' => Input::get('message'),
            'status' => 0
        ]);
        $notification = new Notification();
        $notification->account_id = $transaction->owner_id;
        $notification->transaction_id = $transaction->id;
        $notification->save();
        // mail đến người cho.

        $data = array('title' => 'quanganh9x', 'username' => Auth::user()->username, 'namegift' => $gift->name, 'transaction' => $notification->transaction->id);
        Mail::send('emails.send', $data, function ($message) use ($email) {
            $message->to($email, $email)->subject
            ('Tôi muốn xin món hàng này của bạn! Vui lòng xem chi tiết ở bên dưới');
            $message->from('admin@meaning-gift.com', 'Meaning Gift Admin');
        });
        return response()->json(['status' => 0]);
        out: return response()->json(['status' => 'fraud']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notification $notification
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return Notification::where('account_id', Auth::user()->id)->where('created_at', '>=', Carbon::now()->subDays($this->_configs->delayDays)->toDateTimeString())->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification $notification
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request) // confirm
    {
        // kiểm tra để xác thực user đang login vs user gửi request
        if (Auth::user()->id != $request->input('id')) goto out;
        // lấy bản ghi ở trong transaction
        $transaction = Transaction::where('id', $request->input('transaction_id'))
            ->where('owner_id', Auth::user()->id)->where('created_at', '>=', Carbon::now()->subDays($this->_configs->delayDays)->toDateTimeString())->first();
        if (!$transaction || $transaction->status) goto out;
        //câu lênh trên phải kiểm tra xem có tồn tại dữ liệu được trả về không (*)
        if ($id != $transaction->gift_id) goto out;
        //kiểm tra xem user id được gửi lên từ client có giống vs buyer_id đã lấy được từ bản ghi trên.
        if ($request->input('id') == $transaction->buyer_id) goto out;
        // kiểm tra xem có tự follow sản phẩm của chính mình ko
        if ($transaction->owner_id == $transaction->buyer_id) goto out;
        // cập nhật lại status ở transaction
        $transaction->gift->status = 0;
        $transaction->status = true;
        $transaction->gift->save();
        $transaction->save();
        $email = $transaction->buyer->account->email;
        // xóa notification với điều kiện ở dưới
        /*
        $data = array('title' => 'quanganh9x', 'username' => $transaction->owner->account->last_name,'namegift' => $transaction->gift->name, 'transaction' => $transaction);
        Mail::send('emails.send2', $data, function ($message) use ($email) {
            $message->to($email, $email)->subject
            ('Tôi muốn xin món hàng này của bạn! Vui lòng xem chi tiết ở bên dưới');
            $message->from('admin@meaning-gift.com', 'quanganh9x');
        });
        */
        Notification::where('account_id', Auth::user()->id)->delete();
        try {
            $account1 = Account::findOrFail($transaction->buyer_id);
            $account1->credits += 200;
            $account1->save();
            $account2 = Account::findOrFail($transaction->owner_id);
            $account2->credits += 200;
            $account2->save();
        } catch (ModelNotFoundException $exception) {
            return response()->json(['status' => 1, 'message' => 'Credits chưa được thêm vì có lỗi xảy ra']);
        }
        return response()->json(['status' => 0]);
        out: return response()->json(['status' => 'fraud']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Notification $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
