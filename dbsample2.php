<?php
	$host     = "localhost";
	$user     = "root";
	$pswd     = "";
	$db       = "entclass2025";
	$msg      = "Database cannot be connected";
	$dbcon    = @mysqli_connect($host,$user,$pswd,$db) or die($msg);
	
	$sqlstr   = "SELECT * FROM studentinfo ORDER BY fullname ASC";
	$result   = mysqli_query($dbcon,$sqlstr) or die(mysqli_error($dbcon));
	$tb   =  "<table border='1'>";
	$tb  .= "<tr>
				<td>S/NO</td>
				<td>MATRIC NUMBER</td>
				<td>FULL NAME</td>
				<td>GENDER</td>
				<td>LEVEL</td>
			 </tr>";
	$sno = 0;
	while ($rows  = mysqli_fetch_assoc($result)){
		$sno++;
		$matricno = $rows['matricno'];
		$fullname = $rows['fullname'];
		$gender   = $rows['gender'];
		$level    = $rows['classlevel'];
		$tb .= "<tr>
			 	  <td>$sno</td>
				  <td>$matricno</td>
				  <td>$fullname</td>
				  <td>$gender</td>
				  <td><center>$level</center></td>
			    </tr>";
	}
	$tb .= "</table>";
	echo $tb; 
?>