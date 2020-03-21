<?php
	$name = $_POST['na'];
	$comment = $_POST['co'];
	
	$host = "remotemysql.com";
	$user = "Swm0pxlxtV";
	$pass = "qiZtdUy9fF";
	$db = "Swm0pxlxtV";
	
	$conn = mysqli_connect($host , $user , $pass , $db);
	if(!$conn){
		echo "connected successfuly";
	}else{
		echo "connection fialed";
	}
?>