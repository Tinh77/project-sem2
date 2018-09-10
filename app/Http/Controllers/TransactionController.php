<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account_id = auth()->user()->id;
        $obj_owner_id = Transaction::where('owner_id', '=', $account_id)->get();
        $obj_buyer_id = Transaction::where('buyer_id', '=', $account_id)->get();
        return view('client.pages.gift.listGift')->with(['obj_owner_id' => $obj_owner_id, 'obj_buyer_id' => $obj_buyer_id]);
    }

    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('client.pages.gift.gifttransaction', compact('transaction'));
    }

    public function confirmStatus(Request $request)
    {
        $transaction = Transaction::findOrFail($request);
        if (!$transaction){
            return response()->json(['status' => 'fraud4']);
        }
        if($transaction->status == 1){
            $transaction->status = 2;
        }elseif ($transaction->status == 2){
            $transaction->status = 3;
        }
        $transaction->save();
        return response()->json(['status' => 0]);
    }
}
