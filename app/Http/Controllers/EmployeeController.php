<?php

namespace App\Http\Controllers;

use Session;
use Excel;
use App\User;

use App\Year;
use App\Month;
use App\Logs;
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

        $users = User::find(8)->load('logs');
        // $users = $log->log;

        // dd($log);

        return view('add-timelog', compact('users'));
    }

    protected function postUpload(Request $request)
    {


    
        $collection =Excel::load($request->file('file'), function($reader) {})->all()->toArray();
        dd($collection);

        $data = array();

        foreach ($collection as $row) {
            
            array_push($data, $row[2]);
            array_push($data, $row[3]);
            array_push($data, $row[4]);
            array_push($data, $row[5]);
            array_push($data, $row[6]);
            array_push($data, $row[7]);
            array_push($data, $row[8]);
            
        }

        foreach ($data as $d) {
            
            $date = explode(' ',$d['name_date']);
            $date = $date[0];

            Logs::create([
                'id'=>$request->id,
                'date'=>$date,
                'time_in'=>$d['time_in'],
                'time_out'=>$d['time_out'],
            ]);
        }

        return redirect()->back();
    }

}
