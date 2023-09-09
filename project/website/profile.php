<?php
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
  <title>Livefloor an Interior & Furniture Category Bootstrap Responsive Template | About :: W3layouts</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
</head>

<body>
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">My Account</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> My Account</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /about-6-->
  <section class="w3l-cta4 py-5">
      <div class="container py-lg-5">
        <div class="ab-section text-center">
          
          <h3 class="hny-title" style="color:Green">My Account</h3><br>
        <div class="text-center">
          <div class="img-box">
           <img src="../upload/customers/<?php echo $fetch->file;?>" width="250" height="250">
			<br><br>
			<div class="detail-box">
			
		    <p><b>ID :</b><?php echo $fetch->Customer_id;?></p><br>
			<p><b>Firstname :</b><?php echo $fetch->firstname;?></p><br>
			<p><b>Lastname :</b><?php echo $fetch->lastname;?></p><br>
			<p><b>Email :</b><?php echo $fetch->email;?></p><br>
			<p><b>Phonenumber :</b><?php echo $fetch->phonenumber;?></p><br>
			<p><b>Address:</b><?php echo $fetch->address;?></p><br>
			<p><b>country_id :</b><?php echo $fetch->country_id;?></p><br>
			<div class="d-flex justify-content-center">
			<a href="edituser?editCustomer_id=<?php echo $fetch->Customer_id;?>" class="btn btn-primary">
			Edit Profile
			</a>
			</div>
			</div>
        </div>
        </div>
      </div>
  </section>
  <!-- //about-6-->
   
  <!-- team -->
  <section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div class="title-content text-center mb-lg-3 mb-4">
          <h6 class="sub-title">Our team</h6>
          <h3 class="hny-title">Meet our people</h3>
        </div>
        <div class="row">
          <div class="col-lg-4 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team1.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Alexander</a></h3>
                <span class="post">Description</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team2.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Victoria</a></h3>
                <span class="post">Description</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team3.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Smith roy</a></h3>
                <span class="post">Description</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team4.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Johnson</a></h3>
                <span class="post">Description</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team5.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Johnson</a></h3>
                <span class="post">Description</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="assets/images/team6.jpg" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Johnson</a></h3>
                <span class="post">Description</a></span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //team -->

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
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
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

