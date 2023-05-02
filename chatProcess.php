<?php

include "config.php";
session_start();
if($_POST)
{
	$name=$_SESSION['Name'];
    $message=$_POST['Message'];
    
	$sql="INSERT INTO `Chat`(`Name`, `Message`) VALUES ('".$name."', '".$message."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: chatpage.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>