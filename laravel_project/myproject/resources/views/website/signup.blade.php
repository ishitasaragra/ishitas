
@extends('website.layout.structure')


@section('main_container')

    <!-- Header Start -->
  
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Sign Up</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Sign Up</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Registration Here</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="signup-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form action="{{url('/signup')}}" method="post" name="" novalidate="novalidate" enctype="multipart/form-data">
						@csrf
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required" data-validation-required-message="Please enter password" />
                                <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                <input type="phonenumber" class="form-control" name="phonenumber" placeholder="Phonenumber" required="required" data-validation-required-message="Please enter phonenumber" />
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                    <input type="address" class="form-control" name="address" placeholder="Your Address" required="required" data-validation-required-message="Please enter your address" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            Gender:
                            <div class="control-group">
                                Male :<input type="radio" name="gender" value="Male" placeholder="gender" required="required" data-validation-required-message="Please choose gender" />
                                Female :<input type="radio" name="gender" value="Female" placeholder="gender" required="required" data-validation-required-message="Please choose gender" />
                            </div><br>
                            Language:
                            <div class="control-group">
                                Hindi <input type="checkbox" name="language[]" value="Hindi" placeholder="Language" required="required" data-validation-required-message="Please choose Language" />
                                English <input type="checkbox" name="language[]" value="English" placeholder="Language" required="required" data-validation-required-message="Please choose Language" />
                                Gujarati <input type="checkbox" name="language[]" value="Gujarati" placeholder="Language" required="required" data-validation-required-message="Please choose Language" />
                            </div><br>
                            <div class="control-group">
                            Image Upload :
				            <input type="file" name="file" class="form-control">
				            </div><br>
                            <div class="control-group">
                            Country : 
							<select name="cid" class="form-control">
                            <option>select country</option>
							@if(!empty($country))
								@foreach($country as $c)
							    <option value="{{$c->cid}}">{{$c->cnm}}</option>
								@endforeach
							@endif
							
                            </select>
                            </div><br>
                            

                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" name="submit" value="signup">Signup</button>
								<a href="/login">If you already registered then click here for Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection