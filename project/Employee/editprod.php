<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Products</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Edit Products
                        </div>
                        <div class="panel-body">
                        <form action=" " method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                            <label>Product_name</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->Product_name?>" name="Product_name">
											</div>
							<div class="form-group">
                                            <label>Product_image</label>
                                            <input class="form-control" type="file" name="file" >
                                            <img src="../upload/products/<?php echo $fetch->file;?>" alt="" width="40px">
											</div>
											
                            <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->Description?>" name="Description">
											</div>
						    <div class="form-group">
                                            <label>Main_price</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->Main_price?>" name="Main_price">
											</div>
						    <div class="form-group">
                                            <label>Discount_price</label>
                                            <input class="form-control" type="text" value="<?php echo $fetch->Discount_price?>" name="Discount_price">
											</div>
                            
                            
                            <div class="form-group">
							     <button type="submit" name="submit"class="btn btn-primary">Save</button>
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
