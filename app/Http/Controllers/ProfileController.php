<?php

namespace App\Http\Controllers;

use App\Account;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $obj = DB::table('users')
//            ->where('id', '=', '1')
//            ->join('accounts', 'accounts.id', '=', 'users.account_id')
//            ->select('users.*','accounts.first_name as account_first_name','accounts.last_name as account_last_name','accounts.email as account_email','accounts.phone as account_phone'
//                ,'accounts.address as account_address','accounts.gender as account_gender','accounts.age as account_age','accounts.intro as account_intro' )
//            ->get();
//        return view('client.pages.gift.personal_information')->with(['obj' => $obj]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if (Auth::check()) {
//            $id = auth()->id();
            $obj = Account::where('id', '=', $id)->first();
            if ($obj == null) {
                return view('client.404client.404');
            }
//            dd($obj);
            return view('client.pages.gift.personal_content')->with('obj', $obj);
        }

    }

    public function showUser($id)
    {
//        $obj = Gift::find($id);
////        $info = Account::find($obj->account_id);
//        if ($obj == null || $obj->status != 1) {
//
//            return view('client.404client.404');
//        }
//        return view('client.pages.gift.personal_content')->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
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
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
