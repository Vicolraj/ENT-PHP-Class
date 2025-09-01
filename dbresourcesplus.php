<?php
	$host     = "localhost";
	$user     = "root";
	$pswd     = "";
	$db       = "entclass2025";
	$msg      = "Database cannot be connected";
	$dbcon    = @mysqli_connect($host,$user,$pswd,$db) or die($msg);
	
	extract($_POST);
	$matricno = strtoupper($matricno);
	$fullname = strtoupper($fullname);
	$email    = strtolower($email);
	
	
	# Check if record exist
	$sqlstr = "SELECT matricno FROM studentinfo WHERE matricno = '$matricno'"; 
	$result = mysqli_query($dbcon,$sqlstr) or die(mysqli_error($dbcon));
	$count  = mysqli_num_rows($result);
	
	if ($count == 0){
		$sqlstr   = "INSERT INTO studentinfo 
		(matricno,fullname,gender,classlevel,departmentcode,phoneno,email,age) 
		VALUES 
		('$matricno','$fullname','$gender',$classlevel,'$departmentcode','$phoneno','$email',$age)";
	}else{
		$sqlstr   		= "UPDATE studentinfo SET 
		matricno  		= '$matricno',
		fullname  		= '$fullname',
		gender    		= '$gender',
		classlevel		= $classlevel,
		departmentcode	= '$departmentcode',
		phoneno			= '$phoneno',
		email			= '$email',
		age				= $age  
		WHERE matricno = '$matricno'";		
	}
	$result = mysqli_query($dbcon,$sqlstr) or die(mysqli_error($dbcon));	
	echo "Record Successfully Inserted/Updated";
?>