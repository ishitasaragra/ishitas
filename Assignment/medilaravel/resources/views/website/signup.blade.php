@extends('website.layout.structure')


@section('main_container')
  
  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container"></br>
        <h2>
         Sign Up
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="form_container">
            <form action="{{url('/signup')}}" method="post" name=""  enctype="multipart/form-data">
			@csrf
              <div>
              <input type="text" name="name"  placeholder="Full Name" />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" />
              </div>
			  <div>
                <input type="password" name="password" placeholder="password" />
              </div>
			  <div>
                <input type="age" name="age"  placeholder="Age" />
              </div>
              <div>
                <input type="phonenumber" name="phonenumber" placeholder="Phone Number" />
              </div>
              <div>
                <input type="address" name="address" placeholder="address" />
              </div>
			   Gender:
                <div class="control-group">
                Male :<input type="radio" name="gender" style=""   value="Male" placeholder="gender"  />
                Female :<input type="radio" name="gender" style="" value="Female" placeholder="gender" />
                </div><br>
				<div class="control-group">
                Image Upload :
				<input type="file" name="file" class="form-control"><br>
				
				</div>
			  
              <div class="btn_box">
                <button type="submit" name="submit" value="signup">Submit</button>
				<a href="login">If you already registered then click here for Login</a>
                  
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  
  @endsection