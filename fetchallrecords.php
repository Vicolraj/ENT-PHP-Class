<?php
	header("Access-Control-Allow-Origin: *");


	$host     = "localhost";
	$user     = "root";
	$pswd     = "";
	$db       = "entclass2025";
	$msg      = "Database cannot be connected";
	$dbcon    = @mysqli_connect($host,$user,$pswd,$db) or die($msg);
	
	$sqlstr   = "SELECT * FROM studentinfo as t1 
                INNER JOIN departments as t2 
				ON t1.departmentcode=t2.departmentcode	
				ORDER BY fullname ASC";
	$result   = mysqli_query($dbcon,$sqlstr) or die(mysqli_error($dbcon));
	$tb   =  "";
	$sno = 0;
	while ($rows  = mysqli_fetch_assoc($result)){
		$sno++;
		$matricno 	= $rows['matricno'];
		$fullname 	= $rows['fullname'];
		$gender   	= $rows['gender'];
		$level    	= $rows['classlevel'];
		$department = $rows['departmentname'];
		$tb .= "{'matricno': '$matricno', 'fullname': '$fullname', 'gender': '$gender', 'level': '$level', 'department': '$department'}";
	}

	 str_replace("'", '"', $tb);
	echo json_encode("[$tb]"); 
?>