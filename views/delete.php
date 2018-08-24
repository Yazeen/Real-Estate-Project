<?php 
session_start();

if( isset($_SESSION['username'] ) )
{

if( $_GET['id'] != null && is_numeric($_GET['id'] ))
{
	     $conn = new mysqli("localhost", "root", "", "database_real_estate");
	     if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	     } 
	     else 
	     {	
	         $sql = "SELECT * FROM staffs WHERE username='" .$_SESSION['username']. "'";
	         $result = $conn->query( $sql );
	         if ( $result && $result->num_rows != 0)
             {
		    	  $staff_info = mysqli_fetch_row($result);
		    	  if ( $staff_info[ 2 ] == 'admin' ) 
		    	  { 
			         mysqli_close( $conn );
		    	     $conn = new mysqli("localhost", "root", "", "database_real_estate");
					 if ($conn->connect_error) {
					 die("Connection failed: " . $conn->connect_error);
					 } 
					 else 
					 {
					     $sql = "DELETE FROM real_estate WHERE id=" .$_GET['id'];
						 $conn->query($sql);
						 $sql = "UPDATE real_estate SET id=id-1 WHERE id >".$_GET['id'];
						 $conn->query($sql);
						 mysqli_close( $conn );
						 header('location: foraproval.php');
					 }
		    	  }
				  else echo '<center><h1><u>Only admins can delete listings.</center></h1></u>';
		    }
			else header('location: index.php');
		 }
	}
	else header('location: index.php');	
}
else header('location: index.php');	 			  	

?>
