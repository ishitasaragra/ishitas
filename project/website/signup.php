<?php
if(isset($_SESSION['user']))
{
	echo "<script>
	window.location='index';
	</script>";
}
 include_once('header.php');
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype php>
<php lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Livefloor an Interior & Furniture Category Bootstrap Responsive Template | Contact :: W3layouts</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <script>

function validate() 
{
	// id get 
	var firstname=document.forms["myform"]["firstname"].value;  
	
	if(firstname=="" || firstname==null) 
	{
		alert('Please fill out the User First Name'); 
		return false;  
	}
	var lastname=document.forms["myform"]["lastname"].value;  
	if(lastname=="" || lastname==null) 
	{
		alert('Please fill out the User last name'); 
		return false;  
	}
	
	 var email = document.forms["myform"]["email"].value;
	  if (email == "" || email == null)
	  {
		  alert('please fill out the email');
		  return false;
	  }
	  
	   var mail = /^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
	  if (!mail.test(email))
	  {
		  alert('please fill in a proper email');
		  return false;
	  }
	  
	  var password = document.forms["myform"]["password"].value;
	  if (password == "" || password == null)
	  {
		  alert('please fill out the password');
		  return false;
	  }
	  
	  if (!(password.length >=3 && password.length <=8))
	  {
		  alert('please provide a password minimum of 3 and a maximum of 8 characters');
		  return false;
	  }
	  
	  var address = document.forms["myform"]["address"].value;
	  if (address == "" || address == null)
	  {
		  alert('please fill out the user address');
		  return false;
	  }
	  
	  var phonenumber = document.forms["myform"]["phonenumber"].value;
	  if (phonenumber == "" || phonenumber == null)
	  {
		  alert('please fill out the user phonenumber');
		  return false;
	  }
	   
	   // validate the select country
	  var selectElement = document.getElementById("inputstate");
	  var selectedValue = selectElement.value;
	  
	  if (selectedValue === "")
	  {
		  alert("please select a country.");
		  return false;
	  }
	  
	  // validate the image file
	  
      var fileInput = document.forms["myform"]["file"];
	  var allowedExtensions = ["jpg", "jpeg", "png", "gif"];
	  var maxFileSizeInBytes = 5 * 1024 * 1024;
	  
	  if (fileInput.file.length === 0)
	  {
		  alert("please select an image file.");
		  return false;
	  }
	  
	  var filename = fileInput.files[0].name;
	  var fileExtension = filename.split(".").pop().toLowercase();
	  
	  if (allowedExtensions.indexof(fileExtension) === -1)
	  {
		  alert("Invalid file type. Allowed file types are: " + allowedExtensions.join(","));
		  return false;
	  }

      if  (fileInput.files[0].size > maxFileSizeInBytes)
	  {
		  alert("File size exceeds the maximum allowed size of 5MB.");
		  return false;
	  }
	  
}


</script>

</head>


<body>
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Signup</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> signup </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!-- /contact-->
  <div class="signup-form py-5" id="signup">
    <div class="container py-lg-5 py-md-4">
      
      <h3 class="hny-title mb-lg-5 mb-4">Registration Form</h3>
        <div class="signup12-main mb-5">
            <form name="myform" action=" " method="post" enctype="multipart/form-data" onsubmit="return validate()">
                <div class="main-input">
					<div class="form-group">
				
						<div class="d-grid mb-12">
							<input type="text" name="firstname" placeholder="First Name:" class="signup-input" /><br>
							
							<input type="text" name="lastname" placeholder="Last Name:" class="signup-input" /> <br>					 
						</div>
						
						<div class="d-grid">
							<input type="email" name="email"  placeholder="Your Email id :"
                            class="signup-input"><br>
							
							<input type="password" name="password"  placeholder="password :"
                            class="signup-input" /><br>
							
							<input type="address" name="address" placeholder="Address :"
                            class="signup-input" /><br>
							
							<input type="phonenumber" name="phonenumber"  placeholder="Phone Number :"
                            class="signup-input" /><br>
							
						
							<label for ="inputstate">Country :</label>
							<br><select id="inputstate" name="country_id" class="signup-input">
							<option value="">select country</option>
							<?php
							if (!empty($countries_arr))
							{
								foreach($countries_arr as $c)
								{
									?>
									<option value="<?php echo $c->country_id?>"><?php echo $c->country_name?></option>
									<?php
								}
							}
							?>
						    </select>
					    </div>
                    </div>
				</div>
				<br><div class="form-group">
				<label for="file">Image Upload</label>
				<input type="file" name="file" class="form-control">
				</div>
                
                <div class="text-right">
                   <br> <button class="btn btn-style btn-primary btn-contact" type="submit" name="submit">Submit Now</button><br>
					<a class="float-left" href="login">If you allready Register then click Login</a>
                </div>
				    
					
					
            </form>
        </div>
            
        <div class="row pt-lg-4">
          <div class="col-md-12">
              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="contact-address">
                          <ul>
                              <li class="icon-color"><span class="fa fa-map-marker"></span> <span>703 Homestead Street
                                      <br>Waltham, MA 02453</span> </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                      <div class="contact-address">
                          <ul>
                              <li class="icon-color"><span class="fa fa-phone"></span> <span><a class="" href="tel:+(21)-234-9999">Phone :+(21)-234-9999</a>
                                 <a class="" href="tel:+(21)-234-8888">Fax :+(21)-234-8888</a></span></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                      <div class="contact-address">
                          <ul>
                              <li class="icon-color"><span class="fa fa-mail-reply"></span><span>
                                  <a href="mailto:travel@mail.com"> Livefloor@mail.com</a>
                                  <a href="mailto:info@travel.com"> info@Livefloor1.com</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
    <div class="maphny">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
            frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
  <script src="script.js"></script>

<!--//contact-->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>
<?php
 include_once('footer.php');
?>
</body>

