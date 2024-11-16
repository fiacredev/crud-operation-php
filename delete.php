
<?php 

include "connection.php";

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	$sql = "DELETE FROM kavukire WHERE id = '$id'";

	$delete = mysqli_query($con,$sql);

	if ($delete) {
	echo "data deleted successfully";
	header("location:dashboard.php");
	}else{
      echo "error occured through deletig some data in the database";
	}
}

 ?>