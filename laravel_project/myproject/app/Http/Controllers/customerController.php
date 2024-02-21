<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\country;
use Illuminate\Http\Request;

use Hash;
use Session;
use Alert;

class customerController extends Controller
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
	
	function login()
    {
       return view('website/login');
    }
	
	function login_auth(Request $request)
    {
       $data=customer::where('email','=',$request->email)->first();
	   if ($data)
	   {
		   if(Hash::check($request->password,$data->password))
		   {
			   //session create
			   session()->put('customer_id',$data->id);
			   session()->put('name',$data->name);
			   
			   //use session =>session('name') // session()->get('name')
			   
			   Alert::success('Congrats','you\'ve Successfully Login');
			   return redirect('/');
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
		session()->pull('customer_id');
		session()->pull('name');
		Alert::success('Congrats','you\'ve Successfully Logout');
	    return redirect('/');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$data=country::all();
        return view('website/signup',['country'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new customer;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->password=Hash::make($request->password);
		$data->phonenumber=$request->phonenumber;
		$data->address=$request->address;
		$data->gender=$request->gender;
		
		//img upload
		$file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->GetClientOriginalExtension();
        $file->move('upload/customer/',$filename);
        $file=$data->file=$filename;
		
		$data->language=implode(",",$request->language);
		$data->cid=$request->cid;
		
		$data->save();
		Alert::success('congrats','you\'ve Successfully Registered');
	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
       $data=customer::all();
	   return view('admin/manage_cust',['data_customer'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
	 
     public function profile(customer $customer)
    {
		$data=customer::where('id',session('customer_id'))->first();
		return view('website/profile',['data'=>$data]);
        
    }
   

    public function edit(customer $customer,$id)
    {
        $countrydata=country::all();
		$data=customer::find($id);
		return view('website/editprofile',['country'=>$countrydata,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer,$id)
    {
        $data=customer::find($id);
		$data->name=$request->name;
		$data->email=$request->email;
		$data->phonenumber=$request->phonenumber;
		$data->address=$request->address;
		$data->gender=$request->gender;
		$data->language=implode(",",$request->language);
		$data->cid=$request->cid;
		
		//img upload
		if($request->hasFile('file'))
		{
			$old_img=$data->file;
			unlink('upload/customer/'.$old_img);
			
			$file=$request->file('file');
			$filename=time().'_img.'.$request->file('file')->getClientoriginalExtension();
			$file->move('upload/customer/',$filename); //use move image in public/images
			$data->file=$filename;
		}
		$data->update();
		Alert::success('Congrats','you\'ve Successfully Updated');
	    return redirect('/profile');
			
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
	 
    public function destroy(customer $customer,$id)
    {
        //grt id data img
		$data=customer::find($id);
		$filename=$data->file;
		
		//data delete with unlink image
		
		if($filename!="")
		{
			unlink('upload/customer/'.$filename);
		}
		customer::find($id)->delete();
		Alert::success('congrats','you\'ve Successfully Deleted');
	    return redirect()->back();
		
		
    }
}
