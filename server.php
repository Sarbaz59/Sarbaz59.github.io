<?php
	$name = $_POST['na'];
	$email = $_POST['su'];
	$comm = $_POST['co'];
	
	$host = "remotemysql.com";
	$user = "Swm0pxlxtV";
	$pass = "qiZtdUy9fF";
	
	$sql = "INSERT INTO Comment (name ,email, comment) VALUES('$name','$email','$comm');";
	
	$con = new mysqli_connect($host , $user , $pass);
	
	if(!$con){
		die("connection failed". mysqli_connect_error());
	}else{
		echo "successful";
	}
/*	if($con->query($sql) === TRUE){
		echo "your comment has successfully uploaded";
	}else{
		echo "failed";
	}
	$con->close();*/
?>