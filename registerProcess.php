<?php

include "config.php";

if($_POST)
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$phoneNumber=$_POST['PhoneNumber'];
	$address=$_POST['Address'];
	
	$sql="INSERT INTO `Account`(`Name`, `Email`, `Password`, `PhoneNumber`, `Address`) 
		VALUES ('".$name."','".$email."','md5(".$password.")','".$phoneNumber."','".$address."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['Name'] = $name;
		header('Location: home.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
}
?>