<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::where('id_employer', Auth::guard('employer')->user()->id)->get();
        $employer = Employer::where('id', Auth::guard('employer')->user()->id)->get();

        return view('homeadmin', compact('job', 'employer'));
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
            'company_name'=>'required',
            'company_employer_name'=>'required',
            'company_type'=>'required',
            'company_address'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'retype-password'=>'required_with:password|same:password',
        ],
        ['retype-password.required'=>'Password Tidak Sama',
        ]);

        Employer::create([
            'company_name'=>$request->company_name,
            'company_employer_name'=>$request->company_employer_name,
            'company_type'=>$request->company_type,
            'company_address'=>$request->company_address,
            'email'=>$request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/adminlogin')->with('status', 'Register Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
