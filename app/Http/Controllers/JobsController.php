<?php

namespace App\Http\Controllers;
use App\JobApplication;

use Illuminate\Http\Request;
use App\Job;
class JobsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

   


   
    public function create()
    {
        
        return view('jobs.job');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validation = $this->validate($request, [
            "job_title"=>"required",
            "description"=>'required',
            "requirement"=>'required',
            "location"=>'required',
            "salary_range"=>"required"   
        ]);

        

        $job = new Job;
        $job->admin_id = auth()->user()->id; 
        $job->job_title = $request->input('job_title');
        $job->description = $request->input('description');
        $job->requirement= $request->input('requirement');
        $job->location = $request->input('location');
        $job->salary_range= $request->input('salary_range'); 
        $job->save();

        return redirect('/admin')->with('response','Job uploaded  successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($job_id)
    {
        $jobs =Job::where('id', '=', $job_id)->get();
        return view('jobs.view',compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($job_id)
    {
        $job =Job::find($job_id);
        return view('jobs.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $job_id)
    {
        $this->validate($request, [
            "job_title"=>"required",
            "description"=>'required',
            "requirement"=>'required',
            "location"=>'required',
            "salary_range"=>"required"   
        ]);
        $job = new Job;
        $job->job_title = $request->input('job_title');
        $job->description = $request->input('description');
        $job->requirement= $request->input('requirement');
        $job->location = $request->input('location');
        $job->price= $request->input('price');
        

        $data = array(
            'job_title' => $job->job_title,
            'description' => $job->description,
            'requirement' => $job->requirement,
            'location' => $job->location,
            'price' =>  $job->price
        );

        Job::where('id',$job_id)->update($data);
        $job->update();
       return redirect('/admin')->with('response','Job updated  successfully');

 return $job_id;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($job_id)
    {
        Job::where('id',$job_id)->delete();
    return redirect('/admin')->with('response','Job Post deleted  successfully');
    }


    public function showApplications($job_id)
    {
        $job = Job::find($job_id);
        $applications = $job->jobApplications;

        //return $applications->all();
        return view('jobs.applied',compact('applications'));
    }

    public function viewPDF($pdf_name){

        $path = public_path().'/storage/application/'.$pdf_name;
       
        return response()->file($path);
    }


   
}
