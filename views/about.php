<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <?php if( isset($_SESSION['username'] ) ) echo '<span class="pull-right">Hi, '.ucwords($_SESSION['username']). '.</span>'; 
	else echo '<span class="pull-right"> Hi, Guest.</span>'; ?>
    <h2>About Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row">
  <div class="col-lg-8  col-lg-offset-2">
  <img src="../resources/images/about.jpg" class="img-responsive thumbnail"  alt="realestate">
  <h3>Our Mission</h3>
  <p>Our goal is to create a real estate management website that is comfortable for both buyers and sellers to use.</p>
  <h3>The Team</h3>
  <p>1. Mohammed Yazeen<br>
   2. Sunil Mohan<br>
   3. Abhai Sukesan<br>
   4. Asif<br>
   5. Ashwin S
   </p>
  </div>
 
</div>
</div>
</div>

<?php include'footer.php';?>