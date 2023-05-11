<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $pincode = $_POST['pincode'];
	// Database connection
	$conn = new mysqli('localhost','root','','balaji');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register (name,email,password,phoneno,pincode)values('$name','$email','$password','$phonenumber','$pincode')");
		$execval = $stmt->execute();
		echo $execval;
		echo("Registration sucessfull");
		header("location:login.php");
		$stmt->close();
		$conn->close();
	}
?>