<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\User;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jobs = Job::paginate(2);
        return view('admin',compact('jobs'));
    }
    public function showUsers(){
        $users = User::paginate(50);
        return view('jobs.users',compact('users'));
    }
}
