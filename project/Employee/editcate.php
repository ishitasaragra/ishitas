<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Categories</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Edit Categories
                        </div>
                        <div class="panel-body">
                            <form action=" " method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Category_name</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->Category_name?>" name="Category_name">
							            </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->Description?>" name="Description">
								        </div>
										<div class="form-group">
                                            <label>Category_image</label> 
                                          <input class="form-control" type="file" name="file">
                                          <img src="../upload/categories/<?php echo $fetch->file;?>" alt="" width="40px">
								        </div>
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
<?php
    include_once('footer.php');
	?>    
