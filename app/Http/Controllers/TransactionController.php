<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Transaction;
use App\Gift;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexOwnerId()
    {
        if (auth()->check()) {
            $account_id = auth()->user()->id;
            $obj_owner_id = Transaction::where('owner_id', '=', $account_id)
                ->join('gifts', 'transactions.gift_id', '=', 'gifts.id')
                ->join('accounts', 'transactions.buyer_id', '=', 'accounts.id')
                ->select('transactions.*', 'gifts.images as gift_images', 'gifts.name as gift_name', 'accounts.first_name as account_first_name')
                ->get();


            $obj_buyer_id = Transaction::where('buyer_id', '=', $account_id)
                ->join('gifts', 'transactions.gift_id', '=', 'gifts.id')
                ->join('accounts', 'transactions.buyer_id', '=', 'accounts.id')
                ->select('transactions.*', 'gifts.images as gift_images', 'gifts.name as gift_name', 'accounts.first_name as account_first_name')
                ->get();


            return view('client.pages.gift.listGift')->with(['obj_owner_id' => $obj_owner_id, 'obj_buyer_id' => $obj_buyer_id]);
        } else {
            return redirect('/login');
        }
    }
//    public function indexBuyerId()
//    {
//        if (auth()->check()) {
//            $account_id = auth()->user()->id;
//            $obj_buyer_id = Transaction::where('buyer_id', '=', $account_id)
//            ->join('gifts', 'transactions.gift_id', '=', 'gifts.id')
//                ->join('accounts', 'transactions.buyer_id', '=', 'accounts.id')
//                ->select('transactions.*', 'gifts.images as gift_images', 'gifts.name as gift_name', 'accounts.first_name as account_first_name')
//                ->get();
//            return view('client.pages.gift.listGift')->with(['obj_buyer_id' => $obj_buyer_id]);
//        } else {
//            return redirect('/login');
//        }
//    }
}
