<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{url('admin/assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{url('admin/assets/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{url('admin/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{url('admin/assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
@include('sweetalert::alert')
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{url('admin/assets/img/find_user.png')}}" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-desktop fa-3x"></i>Category <span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
						<li>
						<a href="add_cate"><i class="fa fa-edit fa-3x"></i>Add Category</a>
						</li>
						<li>
						<a href="manage_cate"><i class="fa fa-table fa-3x"></i>Manage Category</a>
						</li>
						</ul>
					</li>
					    <li>
						<a href="manage_cust"><i class="fa fa-user fa-3x"></i>Customer</a>
						</li>
						
					</li>
					<li>
                        <a href="#"><i class="fa fa-shopping-cart fa-3x"></i>Flavours<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
						<li>
						<a href="add_flav"><i class="fa fa-edit fa-3x"></i>Add Flavours</a>
						</li>
						<li>
						<a href="manage_flav"><i class="fa fa-table fa-3x"></i>Manage Flavours</a>
						</li>
						</ul>
					</li>
					<li>
                        <a href="#"><i class="fa fa-user fa-3x"></i>Employee<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
						<li>
						<a href="add_emp"><i class="fa fa-edit fa-3x"></i>Add Employee</a>
						</li>
						<li>
						<a href="manage_emp"><i class="fa fa-table fa-3x"></i>Manage Employee</a>
						</li>
						</ul>
					</li>
					<li>
						<a href="manage_feed"><i class="fa fa-user fa-3x"></i>Feedback</a>
					</li>
					<li>
						<a href="manage_cont"><i class="fa fa-user fa-3x"></i>Contacts</a>
					</li>
                    <li>
                        <a  href="tab-panel"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="table"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->