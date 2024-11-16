<?php 	 

$pswd = "mellow@123";

$enc_pswd = md5($pswd);

echo "<h1>$pswd</h1>";
echo "<h1>$enc_pswd</h1>";


if (md5($pswd) == $enc_pswd) {
	echo "<h1>Welcome</h1>";
	
}else{
	echo "fuck the system Cuz";
}

?>