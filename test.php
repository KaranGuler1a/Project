<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die("error while connecting with database".mysqli_connect_error());
}
else{
	mysqli_select_db($con,'balaji');
	echo "database connected";
}
?>