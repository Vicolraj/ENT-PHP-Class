<?php
	$host     = "localhost";
	$user     = "root";
	$pswd     = "";
	$db       = "entclass2025";
	$msg      = "Database cannot be connected";
	$dbcon    = @mysqli_connect($host,$user,$pswd,$db) or die($msg);
	
	$matricno = $_POST['matricno'];
	
	
	# Check if record exist
	$sqlstr = "SELECT * FROM studentinfo WHERE matricno = '$matricno'"; 
	$result = mysqli_query($dbcon,$sqlstr) or die(mysqli_error($dbcon));
	$count  = mysqli_num_rows($result);
	
	if ($count == 1){
		$row   = mysqli_fetch_assoc($result);
		echo json_encode($row);
	}else{
		echo 0;
	}
?>