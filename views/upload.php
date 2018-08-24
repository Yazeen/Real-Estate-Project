<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if( isset( $_POST['Title'] ) && isset( $_POST['Price'] ) && isset( $_POST['Rooms'] ) && isset( $_POST['Description'] ) && isset( $_POST['Floor'] ) && isset( $_POST['Address'] ) && isset( $_POST['rentorsale'] ) )
    {
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
		if ( !file_exists( '../resources/images/properties/' .$filename) ) 
	    {

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) { die('Error: Please select a valid file format.'); }
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $_FILES["photo"]["name"])){
                echo $_FILES["photo"]["name"] . " is already exists.";
            } else{
                    move_uploaded_file($_FILES["photo"]["tmp_name"], "../resources/images/properties/" . $_FILES["photo"]["name"]); 
			    	$propImage = $_FILES["photo"]["name"];
			    	$propTitle = $_POST['Title'];
			    	$propPrice = $_POST['Price'];
			    	$propRooms = $_POST['Rooms'];
			    	$propDesp = $_POST['Description'];
			    	$propSpace = $_POST['Floor'];
			    	$propAddress = $_POST['Address'];
					$rentorsale = $_POST['rentorsale'];
					
					$conn = new mysqli("localhost", "root", "", "database_real_estate");
					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					} 
					else 
		 			{	
				        $id = 1;
				        $con2=mysqli_connect("localhost", "root", "", "database_real_estate");
						if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
						else {
						
				        $sql = "SELECT * FROM real_estate";
						if ($result=mysqli_query($con2,$sql)) 
						{ 
					         $id = mysqli_num_rows($result)+1;
						     mysqli_free_result($result);
						}
		    			$sql = "INSERT INTO `real_estate`( `id`, `name`, `monthly_charges`, `images`, `address`, `access`, `floor_space`, `utility`, `description`, `approved`) VALUES (" .$id. ", '" .$propTitle. "', " .floatval($propPrice). ", '" .$propImage. "', '" .$propAddress. "', '" .$rentorsale. "', " .floatval($propSpace). ", '" .$propRooms. "', '" .$propDesp. "', 'false')";
		    			$result = $conn->query( $sql );
						if( $result) echo 'sucess';
		    			echo "Your file was uploaded successfully.";
						header('location: index.php');
						}
                     }
		}
    } 
  }
  else echo "Error: Image with same name already exists. Please change the file name."; 
  }
  else echo "Error: " . $_FILES["photo"]["error"];
 }
 else echo "Not filled completely.";
}
 
?>