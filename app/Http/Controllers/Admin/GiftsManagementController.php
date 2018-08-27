<?php
/**
 * Created by PhpStorm.
 * User: quanganh9x
 * Date: 25/08/2018
 * Time: 10:33 CH
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Category;
use App\Gift;
use App\Comment;

class GiftsManagementController extends Controller
{
    private $_authEnabled;
    private $_rolesEnabled;
    private $_rolesMiddlware;
    private $_rolesMiddleWareEnabled;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->_authEnabled = config('laravelusers.authEnabled');
        $this->_rolesEnabled = config('laravelusers.rolesEnabled');
        $this->_rolesMiddlware = config('laravelusers.rolesMiddlware');
        $this->_rolesMiddleWareEnabled = config('laravelusers.rolesMiddlwareEnabled');

        if ($this->_authEnabled) {
            $this->middleware('auth');
        }

        if ($this->_rolesEnabled && $this->_rolesMiddleWareEnabled) {
            $this->middleware($this->_rolesMiddlware);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagintaionEnabled = config('laravelusers.enablePagination');

        if ($pagintaionEnabled) {
            $gifts = Gift::paginate(config('laravelusers.paginateListSize'));
        } else {
            $gifts = Gift::all();
        }

        $data = [
            'users' => $gifts,
            'gifts' => $gifts,
            'pagintaionEnabled' => $pagintaionEnabled,
        ];

        return view(config('laravelusers.showGiftsBlade'), $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view(config('laravelusers.createGiftsBlade'))->with($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gift = Gift::create([
            'account_id' => Auth::user()->account_id,
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'images' => $request->input('images'),
            'age_range' => $request->input('age_range'),
            'gender' => $request->input('gender'),
        ]);

        return redirect('users')->with('success', trans('laravelusers::laravelusers.messages.user-creation-success'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gift = Gift::find($id);

        return view(config('laravelusers.showIndividualGiftBlade'))->with('gift', $gift);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $gift = Gift::findOrFail($id);
        return view(config('laravelusers.editIndividualGiftBlade'))->with($gift)->with($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gift = Gift::find($id);

        $gift->category_id = $request->input('category_id');
        $gift->description = $request->input('description');
        $gift->name = $request->input('name');
        $gift->images = $request->input('images');
        $gift->age_range = $request->input('age_range');
        $gift->gender = $request->input('gender');

        $gift->save();

        return back()->with('success', trans('laravelusers::laravelusers.messages.update-user-success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gift = Gift::findOrFail($id);
        $gift->delete();
        return redirect('users')->with('success', trans('laravelusers::laravelusers.messages.delete-success'));
    }
}