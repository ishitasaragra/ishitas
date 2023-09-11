<?php

include_once('../website/model.php'); //step 1 load model

class control extends model // step 2 extends
{
	// magic function that call automatically when you declare class object
	 function __construct()
	 {
		session_start();
		 
		 model::__construct();// step 3 call model __construct
		 
         $url=$_SERVER['PATH_INFO'];
		 switch($url)
		 {
			 case '/employee':
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
				   $Emp_name=$_REQUEST['Emp_name'];
				   $Emp_pass=$_REQUEST['Emp_pass'];
   
				   $where=array("Emp_name"=>$Emp_name,"Emp_pass"=>$Emp_pass);
   
				   $res=$this->select_where('employee',$where);
				  //echo "<pre>"; print_r( $res);exit;
				   $chk=$res->num_rows;
				   if($chk==1)
				   {

					$fetch=$res->fetch_object();
					$status=$fetch->status;
					if($status=="Unblock")
					{
					$_SESSION['Emp_id']=$fetch->Emp_id;
					$_SESSION['employee']=$fetch->Emp_name;
					$_SESSION['Emp_email']=$fetch->Emp_email;
					echo "<script>
					alert('Employee Login Success');
					window.location='dashboard';
					</script>";
				    }
					else
					{
						echo "<script>
					    alert('Login Failed due to Blocked Account');
					    window.location='employee';
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
			 include_once('index.php');
			 break;

			 case '/employee_logout':
			unset($_SESSION['employee']);
			echo "<script>
			alert('Employee Logout Success');
			window.location='employee';
			</script>";
			break;
			 
			 case '/dashboard':
			 include_once('dashboard.php');
			 break;
			 
			 case '/add_cate':
			  if(isset($_REQUEST['submit']))
			  //echo"<pre>";print_r($_REQUEST);exit;

			 {
			 
	     	     $Category_name=$_REQUEST['Category_name'];
			     $Description=$_REQUEST['Description'];
			     
				 
				 $file=$_FILES['file']['name'];
				 $path="../upload/categories/".$file;
				 $tmp_file=$_FILES['file']['tmp_name'];
				 move_uploaded_file($tmp_file,$path);
				 //echo"<pre>";print_r($_FILES);exit;
				 $Created_at=date('y-m-d H:i:s');
				 $Updated_at=date('y-m-d H:i:s');
				 $arr=array("Category_name"=>$Category_name,"Description"=>$Description,"file"=>$file,
				 "Created_at"=>$Created_at,"Updated_at"=>$Updated_at);
				 $res=$this->insert('categories',$arr);
				 if($res)
				 {
					 echo "<script>
					 alert('category Added successfully');
					 </script>";
				 }
				 else
				 {
					 echo "<script>
					 alert('Not added');
					 </script>";
				 }
			 }
			 include_once('add_cate.php');
			 break;
			 
			 case '/manage_cate':
			  $data_categories=$this->select('categories');
			 include_once('manage_cate.php');
			 break;
			  
			 case '/add_prod':
			
			 include_once('add_prod.php');
			 break;
			 
			 case '/manage_prod':
			 $data_products=$this->select('products');
			 include_once('manage_prod.php');
			 break;
			 
			 case '/manage_emp':
			 $data_employees=$this->select('employee');
			 include_once('manage_emp.php');
			 break;
			 
			 case '/manage_feed':
			 $data_feedbacks=$this->select('feedbacks');
			 include_once('manage_feed.php');
			 break;
			 
			 case '/manage_cus':
			 $data_customer=$this->select('customers');
			 include_once('manage_cus.php');
			 break;
			 
			 case '/login':
			 include_once('index.php');
			 break;

			 case '/profile':
			$where=array("Emp_id"=>$_SESSION['Emp_id']);
			$res=$this->select_where('employee',$where);
			$fetch=$res->fetch_object();
			include_once('profile.php');
			break;

			 case '/delete':

				if(isset($_REQUEST['delContact_id']))
				{
					$Contact_id=$_REQUEST['delContact_id'];
	
					$where=array("Contact_id"=>$Contact_id);
					$res=$this->delete_where('contacts',$where);
					if($res)
					{
						echo "<script>
						alert('Delete success');
						window.location='manage_cont';
						</script>";
					}
				}
	
				if(isset($_REQUEST['delCategory_id']))
				{
					$Category_id=$_REQUEST['delCategory_id'];
	
					$where=array("Category_id"=>$Category_id);
					$res=$this->delete_where('categories',$where);
					if($res)
					{
						echo "<script>
						alert('Delete success');
						window.location='manage_cate';
						</script>";
					}
				}
	
				if(isset($_REQUEST['delCustomer_id']))
				{
					$Customer_id=$_REQUEST['delCustomer_id'];
	
					$where=array("Customer_id"=>$Customer_id);
					$res=$this->delete_where('customers',$where);
					if($res)
					{
						echo "<script>
						alert('Delete success');
						window.location='manage_cus';
						</script>";
					}
				}
	
				if(isset($_REQUEST['delEmp_id']))
				{
					$Emp_id=$_REQUEST['delEmp_id'];
	
					$where=array("Emp_id"=>$Emp_id);
					$res=$this->delete_where('employee',$where);
					if($res)
					{
						echo "<script>
						alert('Delete success');
						window.location='manage_emp';
						</script>";
					}
				}
	
				if(isset($_REQUEST['delFeedback_id']))
				{
					$Feedback_id=$_REQUEST['delFeedback_id'];
	
					$where=array("Feedback_id"=>$Feedback_id);
					$res=$this->delete_where('feedbacks',$where);
					if($res)
					{
						echo "<script>
						alert('Delete success');
						window.location='manage_feed';
						</script>";
					}
				}
	
				if(isset($_REQUEST['delProduct_id']))
				{
					$Product_id=$_REQUEST['delProduct_id'];
	
					$where=array("Product_id"=>$Product_id);
					$res=$this->delete_where('products',$where);
					if($res)
					{
						echo "<script>
						alert('Delete success');
						window.location='manage_prod';
						</script>";
					}
				}
			break;
				 
			case '/status':
				if(isset($_REQUEST['statusCustomer_id']))
				{
					$Customer_id=$_REQUEST['statusCustomer_id'];
	
					$where=array("Customer_id"=>$Customer_id);
					$run=$this->select_where('customers',$where);
					$fetch=$run->fetch_object();
					$status=$fetch->status;
					
					if($status=="Block")
					{
						$arr=array("status"=>"Unblock");
						$res=$this->update('customers',$arr,$where);
						if($res)
						{
							echo "<script>
						    alert('Unblock success');
						    window.location='manage_cus';
						    </script>";
						}
						
					}
					else
					{
						$arr=array("status"=>"Block");
						$res=$this->update('customers',$arr,$where);
						if($res)
						{
							unset($_SESSION['user']);
							unset($_SESSION['firstname']);
							unset($_SESSION['lastname']);
							unset($_SESSION['Customer_id']);
							echo "<script>
						    alert('Block success');
						    window.location='manage_cus';
						    </script>";

						}
					   	
					}
				}	
			break;

			case '/editcate';
			if(isset($_REQUEST['editCategory_id']))
			{
				$Category_id=$_REQUEST['editCategory_id'];
				$where=array("Category_id"=>$Category_id);
			    $run=$this->select_where('categories',$where);
			    $fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
					$Category_name=$_REQUEST['Category_name'];
				    $Description=$_REQUEST['Description'];
					
					$Updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						//img upload
						$file=$_FILES['file']['name'];
				        $path="../upload/categories/".$file;  //path
				        $tmp_file=$_FILES['file']['tmp_name'];
				        move_uploaded_file($tmp_file,$path);
						
						$arr=array("Category_name"=>$Category_name,"Description"=>$Description,
						"file"=>$file,"Updated_at"=>$Updated_at);
						
						$res=$this->update('categories',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('../upload/categories/'.$userfile);
							echo "<script>
					        alert('categories Update success');
							window.location='manage_cate';
					        </script>";
						}
					}
					else
						{
							$arr=array("Category_name"=>$Category_name,"Description"=>$Description,
							"Updated_at"=>$Updated_at);
							$res=$this->update('categories',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('categories Update success');
							    window.location='manage_cate';
					            </script>";
							}
						
						}	
					
				}
			}
			include_once('editcate.php');
			break;

			case '/editprod';
			if(isset($_REQUEST['editProduct_id']))
			{
				$Product_id=$_REQUEST['editProduct_id'];
				$where=array("Product_id"=>$Product_id);
			    $run=$this->select_where('products',$where);
			    $fetch=$run->fetch_object();
				
				$userfile=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					//echo "<pre>"; print_r($_REQUEST);exit;
					$Product_name=$_REQUEST['Product_name'];
					$Main_price=$_REQUEST['Main_price'];
					$Discount_price=$_REQUEST['Discount_price'];
				    $Description=$_REQUEST['Description'];
					
					
					$Updated_at=date("Y-m-d H:i:s");
					
				    if($_FILES['file']['size']>0)
					{
						//img upload
						$file=$_FILES['file']['name'];
				        $path="../upload/products/".$file;  //path
				        $tmp_file=$_FILES['file']['tmp_name'];
				        move_uploaded_file($tmp_file,$path);
						
						$arr=array("Product_name"=>$Product_name,"Main_price"=>$Main_price,"Discount_price"=>$Discount_price,
						"Description"=>$Description,"file"=>$file,"Updated_at"=>$Updated_at);
						
						$res=$this->update('products',$arr,$where);
						//echo "<pre>"; print_r( $res);exit;
						if($res)
						{
							//echo "<pre>"; print_r($res);exit;
							unlink('../upload/products/'.$userfile);
							echo "<script>
					        alert('products Update success');
							window.location='manage_prod';
					        </script>";
						}
					}
					else
						{
							$arr=array("Product_name"=>$Product_name,"Main_price"=>$Main_price,"Discount_price"=>$Discount_price,
							"Description"=>$Description,"Updated_at"=>$Updated_at);
							$res=$this->update('products',$arr,$where);
							if($res)
							{
								echo "<script>
					            alert('products Update success');
							    window.location='manage_prod';
					            </script>";
							}
						
						}	
					
				}
			}
			include_once('editprod.php');
			break;

			case '/editemp':
				if(isset($_REQUEST['editEmp_id']))
				{
					$Emp_id=$_REQUEST['editEmp_id'];
					$where=array("Emp_id"=>$Emp_id);
					$run=$this->select_where('employee',$where);
					$fetch=$run->fetch_object();
					
					//$userfile=$fetch->file;
					
					if(isset($_REQUEST['submit']))
					{
						//echo "<pre>"; print_r($_REQUEST);exit;
						$Emp_name=$_REQUEST['Emp_name'];
						$Emp_address=$_REQUEST['Emp_address'];
				        $Emp_mobileno=$_REQUEST['Emp_mobileno'];
						
						$Updated_at=date("Y-m-d H:i:s");
						
						if($_FILES['file']['size']>0)
						{
							//img upload
							$file=$_FILES['file']['name'];
							$path="../upload/categories/".$file;  //path
							$tmp_file=$_FILES['file']['tmp_name'];
							move_uploaded_file($tmp_file,$path);
							
							$arr=array("Emp_name"=>$Emp_name,"Emp_address"=>$Emp_address,
							"Emp_mobileno"=>$Emp_mobileno,"file"=>$file,"Updated_at"=>$Updated_at);
							
							$res=$this->update('employee',$arr,$where);
							//echo "<pre>"; print_r( $res);exit;
							if($res)
							{
								//echo "<pre>"; print_r($res);exit;
								unlink('../upload/categories/'.$userfile);
								echo "<script>
								alert('employee Update success');
								window.location='profile';
								</script>";
							}
						}
						else
							{
								$arr=array("Emp_name"=>$Emp_name,"Emp_address"=>$Emp_address,
								"Emp_mobileno"=>$Emp_mobileno,"Updated_at"=>$Updated_at);
								$res=$this->update('employee',$arr,$where);
								if($res)
								{
									echo "<script>
									alert('employee Update success');
									window.location='profile';
									</script>";
								}
							
							}	
						
					}
				}
			include_once ('editemp.php');
			break;

			 
			 
		    default:
			include_once('pagenotfound.php');
			break;
			 
		 }
	 }
}

$obj=new control;
?>