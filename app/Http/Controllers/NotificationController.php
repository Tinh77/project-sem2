<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Notification;
use App\Gift;
use App\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Mail;

class NotificationController extends Controller
{
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
        if (Auth::user()->id == $gift->account->id) return response()->json(['status' => '1']);
        if (Auth::user()->id != $request->get('id')) return response()->json(['status' => '2']);
        if ($request->get('id') == $gift->account->id) return response()->json(['status' => '3']);
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

        $data = array('title' => 'Xin chao vietnam', 'username' => Auth::user()->username, 'namegift' => $gift->name, 'transaction' => $notification->transaction->id);
        Mail::send('emails.send', $data, function ($message) use ($email) {
            $message->to($email, $email)->subject
            ('Tôi muốn xin món hàng này của bạn .Vui lòng xem chi tiết ở bên dưới');
            $message->from('admin@meaning-gift.com', 'Meaning Gift Admin');
        });
        return response()->json(['status' => 0]);
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
        return Notification::where('account_id', Auth::user()->id)->get();
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
        if (Auth::user()->id != $request->input('id')) {
            return response()->json(['status' => 'fraud1']);
        }
        // lấy bản ghi ở trong transaction
        $transaction = Transaction::where('id', $request->input('transaction_id'))
            ->where('owner_id', Auth::user()->id)->first();
        if (!$transaction || $transaction->status)
            return response()->json(['status' => 'fraud4']);
        //câu lênh trên phải kiểm tra xem có tồn tại dữ liệu được trả về không (*)

        //kiểm tra xem user id được gửi lên từ client có giống vs buyer_id đã lấy được từ bản ghi trên.
        if ($request->input('id') == $transaction->buyer_id)
            return response()->json(['status' => 'fraud2']);
        // kiểm tra xem có tự follow sản phẩm của chính mình ko
        if ($transaction->owner_id == $transaction->buyer_id)
            return response()->json(['status' => 'fraud3']);
        // cập nhật lại status ở transaction
        $transaction->gift->status = 0;
        $transaction->status = true;
        $transaction->gift->save();
        $transaction->save();
        $email = $transaction->buyer->account->email;
        // xóa notification với điều kiện ở dưới
        $data = array('title' => 'Xin chao vietnam', 'username' => $transaction->owner->account->last_name,'namegift' => $transaction->gift->name, 'transaction' => $transaction);
        Mail::send('emails.send2', $data, function ($message) use ($email) {
            $message->to($email, $email)->subject
            ('Tôi muốn xin món hàng này của bạn .Vui lòng xem chi tiết ở bên dưới');
            $message->from('admin@meaning-gift.com', 'Meaning Gift Admin');
        });
        Notification::where('account_id', Auth::user()->id)->delete();
        return response()->json(['status' => 0]);
//        // coupon or sth
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