<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Account</title>
</head>
<body>
	<nav class="navbar navbar-nav">
		<div alss="container-fluid">
			<div class="navbar-header">
				<a style=color:black; class="navbar-brand" href="#">Furniture Shopping</a>
            </div>
			
			<ul class="nav navbar-nav navbar-right">
			<li><a href="admin_logout"><i class="fa fa-user"></i>Logout</a></li>
            </ul>
        </div>
    </nav>

	<h2 style="text-align:center">Admin Profile</h2>

	<div class="img-box">
	<img src="../upload/categories/<?php echo $fetch->file;?>" height="250px" weight="250px" alt="">
	<div class="ab-section text-center">
	<div class="detail-box">
			
		  <p><b>admin_id :</b><?php echo $fetch->admin_id;?></p><br>
			<p><b>admin_name :</b><?php echo $fetch->admin_name;?></p><br>
			<p><b>admin_email :</b><?php echo $fetch->admin_email;?></p><br>
    </div>
			<div class="d-flex justify-content-center">
			<button><a href="" class="btn btn-primary">
			Edit Profile
			</a></button>
            </div>
			</div>
</div>
</body>
</html>