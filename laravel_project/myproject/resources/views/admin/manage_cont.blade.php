@extends('admin.layout.structure')

@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage Contacts</h2>   
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
                            Manage Contacts
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>contact_id</th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>message</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									@if(!empty($data_contact))
										@foreach($data_contact as $d)
                                        <tr>
                                            <td>{{$d->contact_id}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->email}}</td>
                                            <td>{{$d->message}}</td>
											<td>
											<a href="{{url('/manage_cont/'.$d->contact_id)}}" class="btn btn-danger me-1">Delete</a>
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