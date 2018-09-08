<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Transaction;
use App\Gift;
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
}
