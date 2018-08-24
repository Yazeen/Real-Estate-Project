<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <?php if( isset($_SESSION['username'] ) ) echo '<span class="pull-right">Hi, '.ucwords($_SESSION['username']). '.</span>'; 
	else echo '<span class="pull-right"> Hi, Guest.</span>'; ?>
    <h2>Contact Us</h2>
</div>
</div>

<!-- banner -->

<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
  <b><u>Contact us</u> <br>
  Realestate Management Project. <br>
 Maria Polytechnic College, Marthandam. <br> 
 E-Mail: yaz33n@live.com </br>
 Mobile no.: +919999992255 </b>
          


                
        </div>
  <div class="col-lg-6 col-sm-6 ">
  
  <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15791.031428969214!2d77.2692501!3d8.3268427!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0455d4b640dc6f%3A0xe143d6365b92415f!2sMaria+Polytechnic+College+Kumarankudy!5e0!3m2!1sen!2sin!4v1516536844719"></iframe></div>
  </div>
</div>
</div>
</div>

<?php include'footer.php';?>