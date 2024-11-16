<?php  

$servername = "localhost";
$username = "root";
$password = "";
$database = "kavu store";

$con = mysqli_connect($servername,$username,$password,$database);

if (!$con) {
	echo "error occured through Connection";
}else{
	echo "connected Successfully"."<br>";
}

?>