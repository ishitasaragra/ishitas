@extends('website.layout.structure')


@section('main_container')
  
  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container"></br>
        <h2>
         Edit Profile
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="{{url('/profile/'.$data->id)}}" method="post" name=""  enctype="multipart/form-data">
			@csrf
              <div>
              <input type="text" name="name" value="{{$data->name}}" placeholder="Full Name" />
              </div>
              <div>
                <input type="email" name="email" value="{{$data->email}}" placeholder="Email" />
              </div>
			  <div>
                <input type="age" name="age" value="{{$data->age}}" placeholder="Age" />
              </div>
              <div>
                <input type="phonenumber" name="phonenumber"  value="{{$data->phonenumber}}" placeholder="Phone Number" />
              </div>
              <div>
                <input type="address" name="address" value="{{$data->address}}" placeholder="address" />
              </div>
			   Gender:
                <div class="control-group">
                Male :<input type="radio" name="gender" style=""  <?php if($data->gen=="Male") {echo "checked";}?> value="Male" placeholder="gender"  />
                Female :<input type="radio" name="gender" style="" <?php if($data->gen=="Female") { echo "checked";}?> value="Female" placeholder="gender" />
                </div><br>
				<div class="control-group">
                Image Upload :
				<input type="file" name="file" class="form-control"><br>
				<img src="{{url('/upload/patient/'.$data->file)}}" width="50px" alt="">
				</div>
			  
                <div>
				<button class="btn btn-primary btn-block py-3 px-5" type="submit" name="submit" value="save">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  
  @endsection