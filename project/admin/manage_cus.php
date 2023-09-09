<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Customer</h1>
                 
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Customer
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Customer_id</th>
                                            <th>file</th>
                                            <th>firstname</th>
                                            <th>lastname</th>
                                            <th>email</th>
											<th>password</th>
											<th>phonenumber</th>
											<th>address</th>
											<th>country_id</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										if (!empty($data_customer))
										{
											foreach($data_customer as $d)
											{
										?>
                                        <tr>
                                            <td><?php echo $d->Customer_id;?></td>
                                            <td><img src="../upload/customers/<?php echo $d->file;?>" width="50" height="50"></td>
                                            <td><?php echo $d->firstname;?></td>
                                            <td><?php echo $d->lastname;?></td>
											<td><?php echo $d->email;?></td>
											<td><?php echo $d->password;?></td>
											<td><?php echo $d->phonenumber;?></td>
											<td><?php echo $d->address;?></td>
											<td><?php echo $d->country_id;?></td>
											<td>
											   <a href="status?statusCustomer_id=<?php echo $d->Customer_id;?>" class="btn btn-success me-1"><?php echo $d->status;?></a>
											   <a href="delete?delCustomer_id=<?php echo $d->Customer_id;?>" class="btn btn-danger me-1">Delete</a>
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
    </body>
    </html>
<?php
    include_once('footer.php');
	?>    