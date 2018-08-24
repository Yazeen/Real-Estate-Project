<?php include'header.php'; $ermsg = "";?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <?php if( isset($_SESSION['username'] ) ) echo '<span class="pull-right">Hi, '.ucwords($_SESSION['username']). '.</span>'; 
	else header('Location: index.php'); ?>
    <h2>List a property</h2>
</div>
</div>

<!-- css -->

<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
                <h2><u>Please fill the form</u></h2>';
                <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control" name="Title" id="Title" placeholder="Title" required/>
                <input type="number" class="form-control" name="Price" id="Price" placeholder="Price" required/>
                <input type="text" class="form-control" name="Floor" id="Floor"placeholder="Floor Space in sq ft." required/>
				<input type="text" class="form-control" name="rentorsale" id="rentorsale" placeholder="Rent / Sale." min="1" max="20" required/>
				<input type="number" class="form-control" name="Rooms" id="Rooms" placeholder="Rooms." min="1" max="20" required/>
                <textarea rows="3" class="form-control" name="Address" id="Address" placeholder="Address" required/> </textarea>
				<textarea rows="4" class="form-control" name="Description" id="Description" placeholder="Description" required/></textarea>
				<label for="fileSelect">Select an image of the property to display as cover:</label>
				<input type="file" name="photo" id="fileSelect">
				<p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
				<button type="submit" class="btn btn-success" value="Upload" name="Submit">List and wait for admin approval.</button>
				
				</form>		
            
  </div>
  <div class="col-lg-6 col-sm-6 ">
  
  <!-- right side -->
  </div>
</div>
</div>
</div>