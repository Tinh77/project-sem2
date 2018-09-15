<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/client/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|between:6,20|unique:users,username',
            'email' => 'required|string|email|unique:accounts,email|max:191',
            'password' => 'required|string|between:6,191|confirmed|different:username',
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'address' => 'required|string',
            'phone' => 'required|numeric|digits_between:8,11|unique:accounts,phone',
            'gender' => 'required|boolean',
            'age' => 'required|integer|min:1|max:99',
            'intro' => 'required|string|max:191',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $account = Account::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'age' => $data['age'],
            'intro' => $data['intro'],
        ]);
        $user = User::create([
            'account_id' => $account->id,
            'username' => $data['username'],
            'password' => Hash::make($data['password'])
        ]);
        $role = Role::where('name', '=', 'User')->first();  //choose the default role upon user creation.
        $user->attachRole($role);
        return $user;
    }
}
