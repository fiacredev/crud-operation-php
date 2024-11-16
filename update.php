
<?php 
 
 include "connection.php";

 if(isset($_GET['id'])){
  
 	$id = $_GET['id'];
 	$sql = "SELECT * FROM kavukire WHERE id = '$id'";
 	$fetch = mysqli_query($con,$sql);
 	$data = mysqli_fetch_array($fetch);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form method="POST" action="update1.php"> 

		<h1>Here We are Dealing With updating..</h1>

		<input type="hidden" name="id" value="<?php echo $id ?>">
        
       <label>First Name:</label>
		<input type="text" name="fname"
		value="<?php echo $data['firstname'] ?>"><br><br>
        
        <label>last name:</label>
		<input type="text" name="lname" 
		value="<?php echo $data['lastname'] ?>"><br><br>

        <label>Enter your Password:</label>
		<input type="text" name="password" 
		value="<?php echo $data['password'] ?>"><br><br>

		<input type="submit" name="submit">

	</form>
</body>
</html>

<?php } ?>