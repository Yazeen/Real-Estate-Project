<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>

<!-- Login stuff -->
    <link rel="shortcut icon" type="image/x-icon" href="../resources/images/icon.ico" />

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
 
	<link href="login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="login-register.css">
	
	<script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="login-register.js" type="text/javascript"></script>
	
	<!-- ends here -->
<title>Realestate Management Project </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="../resources/assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="../resources/assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="../resources/assets/bootstrap/js/bootstrap.js"></script>
  <script src="../resources/assets/script.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<!-- Owl stylesheet -->
<link rel="stylesheet" href="../resources/assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="../resources/assets/owl-carousel/owl.theme.css">
<script src="../resources/assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="../resources/assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../resources/assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="../resources/assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="../resources/assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="../resources/assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body>

<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
				
			    <?php if( (isset($_SESSION['username']) && !empty($_SESSION['username'])) && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'moderator')) echo '<li><a href="foraproval.php">Pending Listings</a></li>';?>
				<?php if( (isset($_SESSION['username']) && !empty($_SESSION['username'])) && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'moderator' || $_SESSION['role'] == 'member')) echo '<li><a href="create.php">Sell a property</a></li>';?>
				<li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
				<?php if( !isset($_SESSION['username']) || empty($_SESSION['username'])) echo '<li><a href="login.php">Sign in</a></li>';
				else echo '<li><a href="logout.php">Logout</a></li>'; ?>
				
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="../resources/images/logo.png" alt="Realestate"></a>           
</div>
<!-- #Header Starts -->
</div>
