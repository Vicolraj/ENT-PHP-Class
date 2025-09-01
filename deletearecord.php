<?php
header("Access-Control-Allow-Origin: *");
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
		$sqlstr = "DELETE FROM studentinfo WHERE matricno = '$matricno'"; 
		$result = mysqli_query($dbcon,$sqlstr) or die(mysqli_error($dbcon));
		echo "Record successfully deleted";
	}else{
		echo "Record does not exist";
	}
?>