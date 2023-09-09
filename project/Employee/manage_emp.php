<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Employee</h1>
                 
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Employee
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                         <tr>
                                            <th>Emp_id</th>
                                            <th>Emp_name</th>
                                            <th>Emp_pass</th>
                                            <th>Emp_email</th>
                                            <th>Emp_mobileno</th>
											<th>Emp_address</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                        if (!empty($data_employees))
										{
											foreach($data_employees as $d)
											{
										?>									   
                                        <tr>
                                            <td><?php echo $d->Emp_id;?></td>
                                            <td><?php echo $d->Emp_name;?></td>
                                            <td><?php echo $d->Emp_pass;?></td>
											<td><?php echo $d->Emp_email;?></td>
                                            <td><?php echo $d->Emp_mobileno;?></td>
											<td><?php echo $d->Emp_address;?></td>
                                            
											<td>
											   <a href="delete?delEmp_id=<?php echo $d->Emp_id;?>" class="btn btn-danger me-1">Delete</a>
											   <a href="" class="btn btn-primary me-1">Edit</a>
                                            </td>                                       
                                        </tr>
										<?php
											}
										}
										else
										{
										?>
										<tr>
										<td> DATA NOT FOUND </td>
										</tr>
										<?php
										}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
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