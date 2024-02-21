<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;


use Alert;
use Session;

//load created mail file
use App\Mail\signupemail;
use Mail;

class patientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
	
	public function create()
    {
		
       return view('website/signup');
    }
	
	public function allshow()
    {
        $data=patient::all();
		return response()->json([
		'status'=>200,
		'patients'=>$data
		]);
    }
	
	public function singleshow($id)
    {
        $data=patient::find($id);
		return response()->json([
		'status'=>200,
		'patients'=>$data
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('website/login');
    }
	
	function login_auth(Request $request)
    {
       $data=patient::where('email','=',$request->email)->first();
	   if ($data)
	   {
		   if(Hash::check($request->password,$data->password))
		   {
			   //session create
			   session()->put('userid',$data->id);
			   session()->put('name',$data->name);
			   
			   //use session =>session('name') // session()->get('name')
			   
			   Alert::success('Congrats','you\'ve Successfully Login');
			   return redirect('/login');
		   }
		   else
		   {
			   Alert::error('Failed','Wrong Password');
			   return redirect()->back();
		   }
	   }
    }

    function logout()
	{
		//session delete
		session()->pull('userid');
		session()->pull('name');
		Alert::success('Congrats','you\'ve Successfully Logout');
	    return redirect('/index');
	}
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validate=Validator::make($request->all(),[
		'name'=>'required',
		'email'=>'required|email',
		'password'=>'required',
		'phonenumber'=>'required',
		'age'=>'required',
		'address'=>'required',
		'gender'=>'required',
		'file'=>'required',
		]);
		
		if($validate->fails())
		{
			return [
		        'success' => 0,
				'message' => $validate->messages(),
	        ];
		}
		
		else
		{
		
        $data=new patient;
		$namemail=$data->name=$request->name;
		$email=$data->email=$request->email;
		$data->password=Hash::make($request->password);
		$data->phonenumber=$request->phonenumber;
		$data->age=$request->age;
		$data->address=$request->address;
		$data->gender=$request->gender;
		
		$file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
        $file->move('upload/patient/',$filename);
        $data->file=$filename;
		
		$data->save();
		
		return response()->json([
		'status'=>200,
		
		'message'=>"Register Success"
		]);
		return patient::create($request->all());
		}
		
		//$maildata=array("namemail"=>$namemail);
		
		//Mail::to($email)->send(new signupemail($maildata));
		
		//Alert::success('congrats','you\'ve Successfully Registered');
	    //return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
	 
    public function show(patient $patient)
    {
       $data=patient::all();
	   return view('admin/manage_pat',['data_patient'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
	 
	public function profile(patient $patient)
    {
		$data=patient::where('id',session('userid'))->first();
		return view('website/profile',['data'=>$data]);
        
    } 
	
    public function edit(patient $patient,$id)
    {
        
		$data=patient::find($id);
		return view('website/editprofile',['data'=>$data]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, patient $patient,$id)
    {
        $data=patient::find($id);
		$data->name=$request->name;
		$data->email=$request->email;
		$data->age=$request->age;
		$data->phonenumber=$request->phonenumber;
		$data->address=$request->address;
		$data->gender=$request->gender;
		
		//img upload
		if($request->hasFile('file'))
		{
			$old_img=$data->file;
			unlink('/public/upload/patient/'.$old_img);
			
			$file=$request->file('file');
			$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
			$file->move('/public/upload/patient/',$filename); //use move image in public/images
			$data->file=$filename;
		}
		$data->update();
		Alert::success('Congrats','you\'ve Successfully Updated');
	    return redirect('/profile');
			
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(patient $patient)
    {
        //
    }
}
