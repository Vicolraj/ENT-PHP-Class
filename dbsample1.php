<?php
	$host     = "localhost";
	$user     = "root";
	$pswd     = "";
	$db       = "entclass2025";
	$msg      = "Database cannot be connected";
	$dbcon    = @mysqli_connect($host,$user,$pswd,$db) or die($msg);
	
	$regno    = "CSC/22/8983";
	$name     = "OBOR MARVELLOUS";
	$sex      = "MALE";
	$class    = 300;
	$deptcode = "CSC";
	$phoneno  = "08136458914";
	$email    = "obormarvellous@gmail.com";
	$age      = 21;
	
	$sqlstr   = "INSERT INTO studentinfo 
	(matricno,fullname,gender,classlevel,departmentcode,phoneno,email,age) 
	VALUES 
	('$regno','$name','$sex',$class,'$deptcode','$phoneno','$email',$age)";
	
	$result = mysqli_query($dbcon,$sqlstr) or die(mysqli_error($dbcon));
	
	echo "Record Successfully Inserted";
	







?>