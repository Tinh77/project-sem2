<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreGiftPost;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyword = Input::get('key');
        $data = Input::get();
        $list_obj = Category::orderBy('created_at', 'desc');
        if (isset($keyword) && Input::get('key')) {
            $list_obj = $list_obj->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('description', 'like', '%' . $keyword . '%');
        } else {
            $data['key'] = '';
        }
        $list_obj = $list_obj->paginate(5);
        return view('admin.category.list')
            ->with('list_obj', $list_obj)
            ->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.category.form1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGiftPost $request)
    {
       $request->validated();

        $obj = new Category();
        $obj -> name = Input::get('name');
        $obj -> description = Input::get('description');
        $obj -> thumbnail = Input::get('thumbnail');
        $obj -> save();
        Session::flash('message', 'Thêm mới thành công');
        Session::flash('message-class', 'alert-success');
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return view('admin.404admin.404');
        }
        return view('admin.category.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return view('admin.404admin.404');
        }
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        $obj->thumbnail = Input::get('thumbnail');
        $obj->save();
        Session::flash('message', 'Sửa thành công');
        Session::flash('message-class', 'alert-success');
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Category không tồn tại hoặc đã bị xoá!'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Đã xoá thông tin danh mục'], 200);
    }
}
