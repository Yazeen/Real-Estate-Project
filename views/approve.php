<?php 
session_start();

if( isset($_SESSION['username'] ) )
{

if( $_GET['id'] != null && is_numeric($_GET['id'] ))
{
	     $servername = "localhost";
	     $username = "root";
	     $password = "";
	     $dbname = "database_real_estate";
	     $conn = new mysqli($servername, $username, $password, $dbname);
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
		    	  if ( $staff_info[ 2 ] == 'admin' || $staff_info[ 2 ] == 'moderator'  ) 
		    	  { 
					     $sql = "SELECT name FROM real_estate WHERE id=" .$_GET['id'];
						 $result = $conn->query($sql);
						 if ( $result && $result->num_rows != 0)
						 {				
                             $sql = "UPDATE real_estate SET approved='true' WHERE id=" .$_GET['id'];					 
					    	 $conn->query($sql);
					    	 header('location: foraproval.php');
		    	         }
				        else header('location: index.php');	
		         }
			     else header('location: index.php');
		    }
			else header('location: index.php');	
	    }
		mysqli_close( $conn );
}
else header('location: index.php');	 
}
else header('location: index.php');	 		  	

?>
