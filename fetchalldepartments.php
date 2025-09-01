<?php
	$host     = "localhost";
	$user     = "root";
	$pswd     = "";
	$db       = "entclass2025";
	$msg      = "Database cannot be connected";
	$dbcon    = @mysqli_connect($host,$user,$pswd,$db) or die($msg);
	
	$sqlstr   = "SELECT departmentcode FROM departments 	
				ORDER BY departmentcode ASC";
	$result   = mysqli_query($dbcon,$sqlstr) or die(mysqli_error($dbcon));
	if (mysqli_num_rows($result)>0){
		while ($rows   = mysqli_fetch_assoc($result)){
			$records[] = $rows['departmentcode'];
		}
		echo json_encode($records);		
	}else{
		echo 0;
	}
?>