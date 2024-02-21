<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\forgotpassword;
use Illuminate\Http\Request;


use Hash;
use Alert;
use App\Mail\otpemail;
use Mail;


class forgotpasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website/forgot');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forgot_pass(request $request)
    {
        $validated = $request->validate([
		   
		    'email' => 'required|email|',
			]);
			$data=patient::where('email','=',$request->email)->first();
			if($data){
				
				$email=$data->email=$request->email;
				$otp =rand(000000,999999);
				
				$maildata=array("email"=>$email,"otp"=>$otp);
				
				Mail::to($email)->send(new otpemail($maildata));
				session()->put('email',$data->email);
				session()->put('otp',$otp);
				
				return redirect('/otp_match');
			}
			else{
				Alert::success('Failed','wrong email');
	            return redirect()->back();
			}
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function otp_match(Request $request)
    {
        $otp=$request->otp;
		if($otp==session()->get('otp'))
		{
			session()->pull('otp');
			return redirect('/reset');
		}
		else{
			Alert::success('Failed','wrong otp');
	        return redirect()->back();
		}
			
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function reset_pass(forgotpassword $forgotpassword,Request $request)
    {
        $password=$request->password;
		$confirm_password=$request->confirm_password;
		$session_email=session()->get('email');
		if($password == $confirm_password)
		{
			$id=patient::where('email','=',$session_email)->first()->id;
			
			$data=patient::find($id);
			$data->password=Hash::make($request->password);
			
			$data->save();
			session()->pull('otp');
			session()->pull('email');
			//logout session
			
			session()->pull('userid');
			session()->pull('username');
			session()->pull('name');
			
			Alert::success('congrats','you\'ve password reset Successfully plz login again');
	        return redirect('/login');
		}
		else{
			Alert::success('Failed','password and confirm password should be not same');
	        return redirect()->back();
		}
			
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function edit(forgotpassword $forgotpassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forgotpassword $forgotpassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(forgotpassword $forgotpassword)
    {
        //
    }
}
