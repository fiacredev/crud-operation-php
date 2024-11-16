
<!-- <?php 

include "connection.php";

 ?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<h1 style="text-align: center;color: red;">Data Gonna Being Fetched And Displayed <span style="color: yellow;">Here..</span></h1>

<table border="2" align="center"> 

	<tr>
		<td>id</td>
		<td>firstname</td>
		<td>lastname</td>
		<td>password</td>
		<td>update</td>
		<td>delete</td>
	</tr>
  
  <?php 
   
   $sql = "SELECT * FROM kavukire";

   $fetch = mysqli_query($con,$sql);
    
    $count = 1;
    if (mysqli_num_rows($fetch)>0){

    while($row = mysqli_fetch_array($fetch)){

    	?>

      
      	
      	<tr>
      		<td><?php echo $count++; ?></td>
      		<td><?php echo $row['firstname']; ?></td>
      		<td><?php echo  $row['lastname']; ?></td>
      		<td><?php echo  $row['password']; ?></td>

      		<td>
      		<a href="update.php?id=<?php echo $row['id']; ?>">
      		update
      	    </a>
      	    </td>

      	    <td>
      	    <a href="delete.php?id=<?php echo $row['id']; ?>">delete</a>
      	    </td>
      	    
      	</tr>

    <?php }}else{echo "<tr><td colspan='6'><h3>The table is empty</h3></td></tr>";}  ?>

    </table>

   

</body>
</html>