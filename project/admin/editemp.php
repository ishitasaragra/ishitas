<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Employee</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          Edit Employee
                        </div>
                        <div class="panel-body">
                            <form action="" method="post" role="form">
                                        <div class="form-group">
                                            <label>Emp_name</label>
                                            <input class="form-control" type="Emp_name" value="<?php echo $fetch->Emp_name?>" name="Emp_name">
                                        </div> 
                                        <div class="form-group">
                                            <label>Emp_email</label>
                                            <input class="form-control" type="Emp_email" value="<?php echo $fetch->Emp_email?>" name="Emp_email">
                                        </div>
                                        <div class="form-group">
                                            <label>Emp_mobileno</label>
                                            <input class="form-control" type="Emp_mobileno" value="<?php echo $fetch->Emp_mobileno?>" name="Emp_mobileno">
                                        </div>
                                        <div class="form-group">
                                            <label>Emp_address</label>
                                            <input class="form-control" type="Emp_address" value="<?php echo $fetch->Emp_address?>" name="Emp_address">
                                        </div>
                            <div class="form-group">
							     <button type="submit" name="submit" class="btn btn-primary">save</button>
							</div>
                        </div>
                            </div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
<?php
    include_once('footer.php');
	?>    
