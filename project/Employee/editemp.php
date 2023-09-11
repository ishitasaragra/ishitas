
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12" >
                     <br><h3 class="page-head-line" text-align="center">Edit Employee Profile</h3>
                     
                     <ul class="nav navbar-nav navbar-left">
			        <li><a href="employee_logout"><i class="fa fa-user"></i><b>Logout</b></a></li>
                   </ul>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading" style="text-align:center">
                        <h1>Edit Employee Here<h1>
                        </div>
                        <div class="panel-body">
                            <form action=" " method="post" enctype="multipart/form-data">
                                       
                                        <div class="form-group">
                                            <label>Emp_name</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->Emp_name?>" name="Emp_name">
								        </div><br>
                                        <div class="form-group">
                                            <label>Emp_address</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->Emp_address?>" name="Emp_address">
								        </div><br>
                                        <div class="form-group">
                                            <label>Emp_mobileno</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->Emp_mobileno?>" name="Emp_mobileno">
								        </div><br>
										<div class="form-group">
                                            <label>Category_image</label> 
                                          <input class="form-control" type="file" name="file">
                                          <img src="../upload/categories/<?php echo $fetch->file;?>" alt="" width="40px">
								        </div><br>
                            <div class="form-group">
							     <button type="submit" name="submit" class="btn btn-primary">Save</button>
						    </div>
							</form>
                        </div>
                </div>

            </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

