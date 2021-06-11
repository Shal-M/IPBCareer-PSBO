<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jobs_name'=>'required',
            'phonenumber'=>'required',
            'email'=>'required',
            'jobs_desc'=>'required',
            'minimum_qualification'=>'required',
            'Benefits'=>'required',
            'jobs_level'=>'required',
            'jobs_category'=>'required',
            'jobs_vacancy'=>'required',
            'jobs_industry'=>'required',
            'educational_recruitment'=>'required',
        ],
        [
        ]);

        Job::create([
            'jobs_name'=>$request->jobs_name,
            'phonenumber'=>$request->phonenumber,
            'email'=>$request->email,
            'jobs_desc'=>$request->jobs_desc,
            'minimum_qualification'=>$request->minimum_qualification,
            'Benefits'=>$request->Benefits,
            'jobs_level'=>$request->jobs_level,
            'jobs_category'=>$request->jobs_category,
            'jobs_vacancy'=>$request->jobs_vacancy,
            'jobs_industry'=>$request->jobs_industry,
            'educational_recruitment'=>$request->educational_recruitment,
            'id_employer'=>Auth::guard('employer')->user()->id,
        ]);
        return redirect('/homeadmin')->with('status', 'Post Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
