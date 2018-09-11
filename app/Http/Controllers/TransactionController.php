<?php

namespace App\Http\Controllers;

use App\Gift;
use Illuminate\Http\Request;
use App\Transaction;
use Illuminate\Support\Facades\Auth;

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

    public function showDetails($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('client.pages.gift.transaction_details', compact('transaction'));
    }

    public function confirmStatus(Request $request)
    {
        $transaction = Transaction::findOrFail($request->transaction_id);
        if (Auth::user()->id == $transaction->gift->account->id) {
            if (!$transaction->confirm_owner_flag) {
                $transaction->confirm_owner_flag = true;
            }
        } else {
            if (!$transaction->confirm_buyer_flag) {
                $transaction->confirm_buyer_flag = true;
            }
        }

        if ($transaction->confirm_owner_flag && $transaction->confirm_buyer_flag) {
            $transaction->status = 2;
        }

        $transaction->save();
        return response()->json(['status' => 1]);
    }

    public function refreshStatus(Request $request)
    {
        $transaction = Transaction::findOrFail($request->transaction_id);
        if(Auth::user()->id == $transaction->owner->id && $transaction->status == 1){
            $transaction->status = '-1';
            $transaction->save();
            return response()->json(['status' => 1]);
        }
        return response()->json(['status' => 0]);
    }
}
