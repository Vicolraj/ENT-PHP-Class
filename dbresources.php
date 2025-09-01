<?php
	$host     = "localhost";
	$user     = "root";
	$pswd     = "";
	$db       = "entclass2025";
	$msg      = "Database cannot be connected";
	$dbcon    = @mysqli_connect($host,$user,$pswd,$db) or die($msg);
	
	$regno    = $_POST['matricno'];
	$name     = $_POST['fullname'];
	$sex      = $_POST['gender'];
	$class    = $_POST['classlevel'];
	$deptcode = $_POST['departmentcode'];
	$phoneno  = $_POST['phoneno'];
	$email    = $_POST['email'];
	$age      = $_POST['age'];
	
	$sqlstr   = "INSERT INTO studentinfo 
	(matricno,fullname,gender,classlevel,departmentcode,phoneno,email,age) 
	VALUES 
	('$regno','$name','$sex',$class,'$deptcode','$phoneno','$email',$age)";
	
	$result = mysqli_query($dbcon,$sqlstr) or die(mysqli_error($dbcon));
	
	echo "Record Successfully Inserted";
	







?>