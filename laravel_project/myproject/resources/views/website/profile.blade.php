@extends('website.layout.structure')

@section('main_container')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Profile</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">profile</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">My Profile</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{url('upload/customer/'.$data->file)}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    
                    <h2>
					Name : {{$data->name}}<br>
					</h2>
					<h4>Email : {{$data->email}}</h4>
					<h5>Address : {{$data->address}}<h5>
					<h5>Gender : {{$data->gender}}<h5>
					<h5>Language : {{$data->language}}<h5>
					<h5>Phonenumber : {{$data->phonenumber}}<h5>
					<h5>Country_id : {{$data->cid}}<h5><br>
					
                    <a href="{{url('profile/'.$data->id)}}" class="btn btn-primary mt-2">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    
@endsection

   