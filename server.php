<?php
	$name = $_POST['na'];
	$email = $_POST['su'];
	$comm = $_POST['co'];
	
	$host = "remotemysql.com";
	$user = "Swm0pxlxtV";
	$pass = "qiZtdUy9fF";
	
	$sql = "INSERT INTO Comment (name ,email, comment) VALUES('$name','$email','$comm');";
	
	$con = new mysqli($host , $user , $pass);
	
	if($con->connect_error){
		die("connection failed".$con->connect_error);
	}
	if($con->query($sql) === TRUE){
		echo "your comment has successfully uploaded";
	}else{
		echo "failed";
	}
	$con->close();
?>