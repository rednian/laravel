<?php

namespace App\Http\Controllers;

use Session;
use Excel;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEmployee;
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

    protected function store(CreateEmployee $request)
    {            
        $request['password'] = Hash::make($request['password']);

        User::create($request->all());

        Session::flash('success','Account successfully created.');

        return redirect()->route('employee.index');
    }

    protected function getUpload()
    {
        return view('add-timelog');
    }

    protected function postUpload(Request $request)
    {

        Excel::load($request->file('file'), function($data) {

            $results = $data->get();

            dd($results['items']);
            //  echo '<pre>';
            // foreach ($results as $result) {
            //     print_r($result->items);
            // }
           
           


        });

    }

}
