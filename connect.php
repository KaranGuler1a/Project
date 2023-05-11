<?php
	$email=$_POST['email'];
	$password=$_POST['password'];
	$conn = new mysqli('localhost','root','','balaji');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else
	{
	$query="select * from register where email='$email' and password='$password'";
	$res=mysqli_query($conn,$query);
	$count=mysqli_num_rows($res);
	if($count==1)
	{
		$row= mysqli_fetch_array($res);
		//session_start();
		//$_SESSION['userid']=$row['reg_id'];
		
	}
	else
	{
		echo("Invalid username/password");
	}
	header("location:front.php");
}
?>