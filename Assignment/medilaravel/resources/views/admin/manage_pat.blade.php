
@extends('admin.layout.structure')


@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Patients</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <div class="col-md-12">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                          manage patients
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phonenumber</th>
											<th>Address</th>
											<th>Age</th>
											<th>Gender</th>
											<th>File</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									@if(!empty($data_patient))
										@foreach($data_patient as $d)
                                        <tr class="success">
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->email}}</td>
                                            <td>{{$d->phonenumber}}</td>
											<td>{{$d->address}}</td>
                                            <td>{{$d->age}}</td>
                                            <td>{{$d->gender}}</td>
											<td><img src="{{url('upload/patient/'.$d->file)}}" width="50px"></td>
											<td>
											<a href="" class="btn btn-success me-1">status</a>
											<a href="" class="btn btn-danger me-1">Delete</a>
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
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    @endsection
