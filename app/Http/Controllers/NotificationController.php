<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Notification;
use App\Gift;
use App\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use jeremykenedy\LaravelLogger\App\Http\Controllers\LaravelLoggerController;
use Mockery\Matcher\Not;

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
        if (Auth::user()->id == $gift->account->id) return response()->json(['status' => 'fraud']);
        if (Auth::user()->id != $request->input['id']) return response()->json(['status' => 'fraud']);
        if ($request->input['id'] == $gift->account->id) return response()->json(['status' => 'fraud']);
        $transaction = Transaction::create([
            'owner_id' => $gift->account->id,
            'buyer_id' => Auth::user()->id,
            'gift_id' => $gift->id
        ]);
        Notification::create([
            'account_id' => $transaction->owner_id,
            'transaction_id' => $transaction->id
        ]);
        return response()->json(['status' => 0]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return Notification::where('account_id', Auth::user()->id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request) // confirm
    {
        if (Auth::user()->id != $request->input['id']) return response()->json(['status' => 'fraud']);
        $transaction = Transaction::where('id', $request->input('transaction_id'))->where('owner_id', Auth::user()->id)->where('gift_id', $id)->first();
        if ($request->input['id'] == $transaction->buyer_id) return response()->json(['status' => 'fraud']);
        if ($transaction->owner_id == $transaction->buyer_id) return response()->json(['status' => 'fraud']);
        if (!$transaction || $transaction->status) return response()->json(['status' => 'fraud']);
        $transaction->status = true;
        $transaction->save();
        Notification::where('account_id', Auth::user()->id)->delete();
        return response()->json(['status' => 0]);
        // coupon or sth
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
    }
}