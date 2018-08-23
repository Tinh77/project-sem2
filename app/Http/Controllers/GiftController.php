<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gift;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreGiftPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexHome()
    {
        $keyword = Input::get('key');
        $data = Input::get();
        $obj = Gift::orderBy('created_at', 'desc');
        if (isset($keyword) && Input::get('key')) {
            $obj = $obj->where('name', 'like', '%' . $keyword . '%');
        } else {
            $data['key'] = '';
        }
        $obj = $obj->paginate(6);
        return view('client.pages.home')
            ->with('obj', $obj)
            ->with('data', $data);
    }

    public function index()
    {
        $keyword = Input::get('key');
        $data = Input::get();
        $obj = Gift::orderBy('created_at', 'desc');
        if (isset($keyword) && Input::get('key')) {
            $obj = $obj->where('name', 'like', '%' . $keyword . '%');
        } else {
            $data['key'] = '';
        }
        $obj = $obj->paginate(5);
        $list_obj = DB::table('categories')->pluck("name", "id");
        return view('client.pages.list')->with('obj', $obj)->with('list_obj', $list_obj)->with('data', $data);
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
            ->paginate(6);
        $gift = Gift::all();
        $list_obj = DB::table('categories')->pluck("name", "id");
        return view('client.pages.list')->with('obj', $obj)->with('gift', $gift)->with('list_obj', $list_obj);
    }

    public function create()
    {
        $obj = Category::all();
        return view('client.pages.gift.form')->with('obj', $obj);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGiftPost $request)
    {
        if (Auth::check()) {
            $account_id = Auth::id();
            $request->validated();
            $current_time = time();
            Cloudder::upload(Input::file('images')->getRealPath(), $current_time);
            $obj = new Gift();
            $obj->name = Input::get('name');
            $obj->category_id = Input::get('category_id');
            $obj->account_id = $account_id;
            $obj->description = Input::get('description');
            $obj->phone_number = Input::get('phone_number');
            $obj->address = Input::get('address');
            $obj->images = $current_time;
            $obj->age_range = Input::get('age_range');
            $obj->gender = Input::get('gender');
            $obj->save();
            return 'ok';
        } else {
            return redirect('/login');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Gift::find($id);
//        $info = Account::find($obj->account_id);
        if ($obj == null || $obj->status != 1) {

            return view('client.404client.404');
        }
        return view('client.pages.product-detail')->with('obj', $obj);
//            ->with('info', $info)

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Gift::find($id);
        if ($obj == null) {
            return view('client.404client.404');
        }
        return view('client.pages.gift.edit');
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
        $obj = Gift::find($id);
        if ($obj == null) {
            return view('client.404client.404');
        }
        $obj = new Gift();
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        $obj->images = Input::get('images');
        $obj->age_range = Input::get('age_range');
        $obj->gender = Input::get('gender');
        $obj->save();
        return redirect('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Gift không tồn tại hoặc đã bị xoá!'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Đã xoá thông tin danh mục'], 200);
    }
}
