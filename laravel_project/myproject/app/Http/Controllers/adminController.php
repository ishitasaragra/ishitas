<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/admin_index');
    }
	
	function login_auth(Request $request)
	{
		$data=admin::where('admin_name','=',$request->admin_name)->first();
		if($data)
		{
			if(Hash::check($request->admin_password,$data->password)
			{
				session()->put('admin_id',$data->id);
				session()->put('admin_name',$data->admin_name);
				
				Alert::success('Congrats','you\'ve Successfully Login');
			    return redirect('/dashboard');
		    }
		    else
		    {
			    Alert::error('Failed','Wrong Password');
			    return redirect()->back();
		    }
		}
		
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
