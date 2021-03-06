<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Job;

class PagesController extends Controller
{
    
    public function getHome(){ 

    	return view('index');
    }
    public function getJobListingPage()
    {

        $jobs = Job::paginate(10);
        // print_r($jobs);
        // exit();
        return view('joblisting',compact('jobs'));

    }
    public function getAboutPage()
    {
        return view('about');
    }
    public function getContactPage()
    {
        return view('contact');
    }
    public function getAdminDashBoard()
    {
        return view('admin.index');
    }
    
}
