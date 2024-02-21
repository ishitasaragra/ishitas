@extends('admin.layout.structure')

@section('main_container')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Add Category</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Basic Form Examples</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Category_name</label>
                                            <input class="form-control" type="text" name="Category_name">
                                        </div>
										<div class="form-group">
                                            <label>Category_image</label> 
                                            <input class="form-control" type="file" name="file">
								        </div>
										<div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" type="text" name="Description">
								        </div>
										
                                        <div class="form-group">
							            <button type="submit" name="submit" class="btn btn-primary">submit</button>
						                </div>
							        </form>
									
								</div>
							</div>
                        </div>
                <!-- /. ROW  -->
                    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    @endsection
