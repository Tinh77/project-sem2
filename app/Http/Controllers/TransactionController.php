<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Transaction;
use App\Gift;
use Illuminate\Support\Facades\Input;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $transaction = DB::select('select * from transactions where status = 1 and owner_id = ? and gift_id  ', [\auth()->id(), 1]);
        return view('client.pages.list_transaction')->with(['transaction' => $transaction]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function view(){
        $name = gift()->description;
        return response()->json($name);
    }

}
