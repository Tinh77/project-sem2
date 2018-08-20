<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gift;
use App\Http\Requests\StoreGiftPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexHome()
    {
        $obj = Gift::orderBy('created_at', 'desc')->paginate(6);
        return view('client.pages.home')->with('obj_home', $obj);
    }

    public function index()
    {
        $list_obj = DB::table('gifts')->pluck("name", "category_id");
        return view('client.pages.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listCategory($id = null)
    {
        $obj = DB::table('gifts')
            ->where('category_id', '=', $id)
            ->paginate(10);
//        dd($obj);
        $gift = Gift::all();
        $list_obj = DB::table('gifts')->pluck("name", "category_id");
        return view('client.pages.list')->with('obj', $obj)->with('gift', $gift)->with('list_obj', $list_obj);
    }

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
    public function store(StoreGiftPost $request)
    {
        $request->validated();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
