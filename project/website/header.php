
<?php
function active ($currect_page)
{
	$url_array=explode('/', $_server['REQUEST_URI']);
	$url=end($url_array);
	if($currect_page == $url)
	{
		echo 'active'; //class name in css
	}
}
?>

<!--header-->

</a>
  <header id="site-header" class="fixed-top">
    <div class="corner-container" >
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="index" >
		
          <span class="logo">Live</span>floor
          </a></h1>
		  <a href="" style="float:left">
<?php
if(isset($_SESSION['firstname']))
{
	 echo " / welcome.. ". $_SESSION['firstname'];
}
?>

        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.php">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php active('index.php')?>">
             <a class="nav-link" href="index"><b>Home</b><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php active('about.php')?>">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item <?php active('services.php')?>">
              <a class="nav-link" href="services">Services</a>
            </li>
            <li class="nav-item <?php active('contact.php')?>">
              <a class="nav-link" href="contact">Contact</a>
			</li>
			
			
			 <form class="form-inline" >
        <input type="search" placeholder="Search" >
        <button class="btn my-2 my-sm-2 nav_search-btn" type="submit">
		<img src="image\magnifying-glass.png" width="20px" alt=""></button>
      </form>
       
            

          </ul>
        </div>
        
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
			<li class="nav-item">
          <a href="contact.php" class="btn btn-style btn-secondary">Get Free Estimate</a>
        </li>
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
				  

                </div>
				
              </label>
            </div>
          </nav>
        </div>
		<div class="login_container ml-0 ml-lg-5">
		<?php
		if(isset($_SESSION['Customer_id']))
		{
			?>
			<a href="profile">
			<img src="image\user.png" width="20px" alt="">
			<span>
			My Account
			</span>
			
			</a><br>
			<a href="logout">
			<img src="image\user.png" width="20px" alt="">
			<span>
			Logout
			</span>
			</a>
		    <?php
		}
		else
		{
			?>
			<a href="login">
			<img src="image\user.png" width="20px" alt="">
			<span>
			<b>Login</b>
			</span>
			</a>
			<?php
		}
		?>
		</div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->
  