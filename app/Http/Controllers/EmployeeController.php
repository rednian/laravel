<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('home',compact('users'));
    }

    public function create()
    {
        return view('auth.register');
    }

        // protected function validator(array $data)
        // {
        //     return Validator::make($data, [
        //         'fname' => 'required|max:255',
        //         'lastname' => 'required|max:255',
        //         'email' => 'required|email|max:255',
        //         'username' => 'required|max:255|unique:employee',
        //         'password' => 'required|min:6|confirmed',
        //     ]);
        // }

        /**
         * Create a new user instance after a valid registration.
         *
         * @param  array  $data
         * @return User
         */
        protected function register(Request $request)
        {

        // $validate = $request->validate([
        //         'fname' => 'required|max:255',
        //         'lastname' => 'required|max:255',
        //         'email' => 'required|email|max:255',
        //         'username' => 'required|max:255|unique:employee',
        //         'password' => 'required|min:6|confirmed',
        //     ]);

             User::create([
                'fname' => $request['fname'],
                'lastname' => $request['lastname'],
                'username' => $request['username'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
        return redired()->route('employee.index');
    }

}
