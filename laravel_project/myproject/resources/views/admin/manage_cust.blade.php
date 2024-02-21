@extends('admin.layout.structure')

@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Customer</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>customer_id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>password</th>
											<th>phonenumber</th>
											<th>address</th>
											<th>gender</th>
											<th>language</th>
											<th>image</th>
											<th>cid</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									@if(!empty($data_customer))
										@foreach($data_customer as $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->email}}</td>
                                            <td>{{$d->password}}</td>
											<td>{{$d->phonenumber}}</td>
											<td>{{$d->address}}</td>
										    <td>{{$d->gender}}</td>
											<td>{{$d->language}}</td>
											<td><img src="{{url('upload/customer/'.$d->file)}}" width="50px"></td>
											<td>{{$d->cid}}</td>
											<td>
											<a href="" class="btn btn-success me-1">{{$d->status}}</a>
											<a href="{{url('/manage_cust/'.$d->id)}}" class="btn btn-danger me-1">Delete</a>
											<a href="" class="btn btn-primary me-1">Edit</a>
											</td>
                                        </tr>
										@endforeach
										
									@else
										<tr>
										<td>Data no found</td>
										</tr>
									@endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                
            
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    @endsection