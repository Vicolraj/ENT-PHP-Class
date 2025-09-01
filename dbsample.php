<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "ent2025";
    $connection = @mysqli_connect($host, $user, $password, $dbname) or die ("<h2><i style='color: red'; font-size: 40px;>There is problem in connecting to database</i></h2>");
    
    $regno = $_POST['matric'];
    $name = $_POST['fullname'];
    $sex = $_POST['gender'];
    $classlevel = $_POST['level'];
    $deptcode = $_POST['deptcode'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    

    $sqlstring = "INSERT INTO studentinfo(
    matricno, fullname, gender, classlevel, departmentcode, phoneno, email) VALUES ('$regno', '$name', '$sex', $classlevel, '$deptcode', '$phoneno', '$email')";
    $result = mysqli_query($connection, $sqlstring) or die(mysqli_error($connection));
    echo "Successful"

    // $sqlstring = "select required * FROM studentinfo";
    // $result = mysqli_query($connection, $sqlstring) or die(mysqli_error($connection));

    // $tablehead = "<tr> <th>Matricno</th> <th>Fullname</th> <th>Gender</th> <th>Level</th> </tr>
    // ";

    // echo "<table border='1' width = '600px' style='background-color: pink; border: none;'>";
    // $nooftimerun = 0;
    // while($rows = mysqli_fetch_assoc($result)){
    //     $matricno = $rows['matricno'];
    //     $fullname = $rows['fullname'];
    //     $gender = $rows['gender'];
    //     $level = $rows['classlevel'];
    //     $tablehead = ($nooftimerun <= 0) ? $tablehead : null;
    //     print "
            
    //             $tablehead
    //             <tr><td>$matricno </td> <td>$fullname</td> <td>$gender</td> <td>$level</td></tr>
            
        
        
    //     ";
    //     ++$nooftimerun;
    // }

    // echo "</table>";
?>