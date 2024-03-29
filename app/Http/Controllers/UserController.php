<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = DB::table('jobs')->join('employer', 'jobs.id_employer', '=', 'employer.id')
        ->select('jobs.id','jobs.updated_at','jobs.jobs_name','jobs.phonenumber','jobs.email','jobs.jobs_desc','jobs.minimum_qualification',
                'jobs.Benefits','jobs.jobs_level','jobs.jobs_category','jobs.jobs_vacancy','jobs.jobs_industry','jobs.educational_recruitment',
                'employer.company_name','employer.company_employer_name','employer.company_type','employer.company_address')->orderby('id','desc')->get();

        //return ($job);
        return view('User.dashboard', compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'retype-password'=>'required_with:password|same:password',
        ],
        ['retype-password.required'=>'Password Tidak Sama',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return view('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::where('id', $id)->get();
        $employer = Employer::where('id', $job[0]->id_employer)->get();

        return view('User.userjobpage', compact('job', 'employer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
