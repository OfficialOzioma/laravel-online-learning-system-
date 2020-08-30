<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobApplication;
use App\JobApplication as JobApplication;
use Illuminate\Http\Request;
use App\Job;
use App\User;
class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobApplication $request)
    {
        if(auth()->user()->dp == null)//if user has not finished profile
         return redirect()
            ->route('editUser')
            ->with('response','Please complete your profile before applying for jobs');
       
        //if user has finished profile push application
        $application = $request->all();
        $job_id = $request->job_id;
        $user_id = auth()->user()->id;
        $job = Job::find($job_id);
        $job->users()->attach($user_id);//taking advantage of pivot tables
        $application['user_id'] = auth()->user()->id;
        $request->file('cv')->store('public/application');
        $fileName = $request->file('cv')->hashName();
        $application['cv'] = $fileName;
        JobApplication::create($application);
        return redirect()->route('jobListings')->with('response','Your Application has been recieved');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function show($job_id)
    {
        $jobs =Job::where('id', '=', $job_id)->get();
        return view('jobs.application',compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplication $jobApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplication $jobApplication)
    {
        //
    }

   
}
