<?php

include_once('model.php'); //step 1 load model

class control extends model // step 2 extends
{
	// magic function that call automatically when you declare class object
	 function __construct()
	 {
		 session_start();
		 
		 model::__construct();// step 3 call model __construct
		 date_default_timezone_set('asia/calcutta');
		 
		 $url=$_SERVER['PATH_INFO'];
		 switch($url)
		 {
			 case '/index':
			 include_once('index.php');
			 break;
			 
			 case '/about':
			 include_once('about.php');
			 break;
			 
			 case '/services':
			 include_once('services.php');
			 break;
			 
			 case '/contact':	
             if(isset($_REQUEST['submit']))

			 {
				//echo"<pre>";print_r($_REQUEST);exit;

				 $name=$_REQUEST['name'];
				 $email=$_REQUEST['email'];
				 $message=$_REQUEST['message'];
				 
				 $Created_at=date('y-m-d H:i:s');
				 $Updated_at=date('y-m-d H:i:s');
				 $arr=array("name"=>$name,"email"=>$email,"message"=>$message,"Created_at"=>$Created_at,
				 "Updated_at"=>$Updated_at);
				 
				 $res=$this->insert('contacts',$arr);
				 if($res)
				 {
					 echo "<script>
					 alert('Contact Inquiry Registered Success'); 
					 </script>";
				 }
				 else
				 {
					 echo "<script>
					 alert('Failed');
					 </script>";
				 }
			 }		
			 
			 include_once('contact.php');
			 break;
			 
			 case '/login':

			 if(isset($_REQUEST['submit']))
			 {
				$email=$_REQUEST['email'];
				$password=md5($_REQUEST['password']);


				$where=array("email"=>$email,"password"=>$password);

				$res=$this->select_where('customers',$where);

				$chk=$res->num_rows;
			    //echo"<pre>";print_r($chk);exit;

				if($chk==1)
				{
					$fetch=$res->fetch_object();
					$status=$fetch->status;
					if($status=="Unblock")
					{
					$_SESSION['user']=$fetch->email;
					$_SESSION['firstname']=$fetch->firstname;
					$_SESSION['lastname']=$fetch->lastname;
					$_SESSION['Customer_id']=$fetch->Customer_id;
					$_SESSION['phonenumber']=$fetch->phonenumber;
					$_SESSION['address']=$fetch->address;
					$_SESSION['country_id']=$fetch->country_id;	
					
					echo "<script>
					alert('customers Login successfully');
					window.location='index';
					</script>";
					}
					else
					{
						echo "<script>
					    alert('Login Failed due to Blocked Account');
					    window.location='login';
					    </script>";
					}		
						
				}
				else
				{
					echo "<script>
					alert('Login Failed');
					</script>";
				}

			 }
			 include_once('login.php');
			 break;
			 
			case '/logout';
			unset($_SESSION['user']);
			unset($_SESSION['firstname']);
			unset($_SESSION['Customer_id']);
			 echo "<script>
					alert(' customers Logout successfully');
					window.location='index';
					</script>";
			break;
			 
			 
			case '/profile';
			$where=array("Customer_id"=>$_SESSION['Customer_id']);
			$res=$this->select_where('customers',$where);
			$fetch=$res->fetch_object();
			include_once('profile.php');
			break;
			
			case '/edituser';
			$countries_arr=$this->select('countries');
			if(isset($_REQUEST['editCustomer_id']))
			{
				$Customer_id=$_REQUEST['editCustomer_id'];
				$where=array("Customer_id"=>$Customer_id);
			    $run=$this->select_where('customers',$where);
			    $fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
					$firstname=$_REQUEST['firstname'];
				    $lastname=$_REQUEST['lastname'];
					$address=$_REQUEST['address'];
					
					$country_id=$_REQUEST['country_id'];
					$Updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						//img upload
						$file=$_FILES['file']['name'];
				        $path="../upload/customers/".$file;  //path
				        $tmp_file=$_FILES['file']['tmp_name'];
				        move_uploaded_file($tmp_file,$path);
						
						$arr=array("firstname"=>$firstname,"lastname"=>$lastname,"address"=>$address,
						"country_id"=>$country_id,"file"=>$file,"Updated_at"=>$Updated_at);
						
						$res=$this->update('customers',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('/upload/customers/'.$userfile);
							echo "<script>
					        alert('customers Update success');
							window.location='profile';
					        </script>";
						}
					}
					else
						{
							$arr=array("firstname"=>$firstname,"lastname"=>$lastname,"address"=>$address,
							"Customer_id"=>$Customer_id,"Updated_at"=>$Updated_at);
							$res=$this->update('customers',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('customers Update success');
							    window.location='profile';
					            </script>";
							}
						
						}	
					
				}
			}
			include_once('edituser.php');
			break;
			
			

			 case '/signup':
			 
			 $countries_arr=$this->select('countries');
			 if(isset($_REQUEST['submit']))

			 {
			//echo "<pre>"; print_r ($_REQUEST);exit;

				 $firstname=$_REQUEST['firstname'];
				 $lastname=$_REQUEST['lastname'];
				 $email=$_REQUEST['email'];
				 $password=md5($_REQUEST['password']);
				 $address=$_REQUEST['address'];
				 $phonenumber=$_REQUEST['phonenumber'];
				 
				 $country_id=$_REQUEST['country_id'];
				 
				  //echo "<pre>"; print_r ($_FILES);exit;
				 $file=$_FILES['file']['name'];
				 $path="../upload/customers/".$file;
				 $tmp_file=$_FILES['file']['tmp_name'];
				 move_uploaded_file($tmp_file,$path);
				  //echo "<pre>"; print_r ($_FILES);exit;
				 
				 $Created_at=date("Y-m-d H:i:s");
				 $Updated_at=date("Y-m-d H:i:s");
				 $arr=array("firstname"=>$firstname,"lastname"=>$lastname,"email"=>$email,"password"=>$password,
				 "address"=>$address,"phonenumber"=>$phonenumber,"country_id "=>$country_id,"file"=>$file,"Created_at"=>$Created_at,
				 "Updated_at"=>$Updated_at);
				 
				 $res=$this->insert('customers',$arr);
				//echo "<pre>"; print_r ( $res);exit;

				 if($res)
				 {
					 echo "<script>
					 alert('customers registered success');
					 </script>";
				 }
				 else
				 {
					 echo "<script>
					 alert('Failed');
					 </script>";
				 }
			 }
				 
			 include_once('signup.php');
			 break;
			 
			 default:
			 include_once('pagenotfound.php');
			 break;
		 }
	 }
}

$obj=new control;
?>