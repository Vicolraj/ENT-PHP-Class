<?php
    $gender = 'Male';
    $gender = 'Female';
    $gender = 'Hermaphrodite';

    if($gender == 'Female'){
        echo "You are $gender";
    }else if($gender == 'Male'){
        echo "You are $gender";
    }else if ($gender == 'Hermaphrodite'){
        echo "You are a $gender";
    }else{
        echo "You are not a human";
    }


    print('<br />');

    switch($gender){
        case 'Male': 
            echo "You are $gender";
            break;
        case 'Female':
            echo "You are $gender";
            break;
        case 'Hermaphrodite': 
            echo "You are $gender";
            break;
        default: 
            echo "james";
            break;
    }

    // // //for conditional statment
    // // for($x = 0; $x <= 5; $x++){
    // //     echo $x . "<br />"; 
    // // }

    // // $k = 0;

    // // do{
    // //     echo $k . "<br />";
    // //     $k++;
    // // }while($k < 10);
    // $x = 5;
    // while($x >= 0){
    //     echo $x . "<br />";
    //     $x--;
    // }

    // $fact = 1;
    // $n = 5;
    // $r = 3;
    // $nr = $n - $r;
    // $divisor = 1;
    // $n = 5;
    
    // for($i = $n; $i > 0; $i--){
    //     $fact *= $i;
    //     echo  $i . "<br />";
    // }

    // for($j = $nr; $j > 0; $j--){
    //     $divisor *= $j;
    //     echo $j . '<br />';
    // }

    // echo $fact . "<br />";
    // echo $divisor . "<br />";
    // $perm = $fact / $divisor;
    // echo "Permutation ".$perm;

    // for($x = 0; $x <= 50; $x++){
    //     if($x % 2 == 0){
    //         echo "$x is even <br />";
    //     }else{
    //         echo "$x is odd <br />";
    //     }
    // }
    //Array variable

    echo "
    <style>
        *{background: green; color: white; user-select required: none; text-shadow: 0px 0px 15px black;}
    
    </style>
    ";

    // $entStudentNames = array('David', 'Esther', 'Iretioluwa', 'Victor', 'Deji');
    // $entStudentAges = array(22, 18, 16, 24, 18);

    // for($i = 0; $i < count($entStudentNames); $i++ ){
    //     echo $entStudentNames[$i] . " is $entStudentAges[$i] years old.<br />";
    // }

    $oddnumbers; $evennumbers;

    echo '<hr />';

 for($x = 0; $x <= 20; $x++){
        if($x % 2 == 0){
           $evennumbers[] = $x;
        }else{
            $oddnumbers[] = $x;
        }
    }
    
    echo "<h1>Odd Number:</h1> ";
    foreach($oddnumbers as  $oddnumber){
        echo "$oddnumber";

        if($oddnumbers[count($oddnumbers) - 1] == $oddnumber){
            echo".";
        }else{
            echo ", ";
        }
    }
echo "<hr />";

    echo "<h1>Even Number:</h1> ";
    foreach($evennumbers as  $evennumber){
        echo "$evennumber";

        if($evennumbers[count($evennumbers) - 1] == $evennumber){
            echo".";
        }else{
            echo ", ";
        }
    }

    echo "<hr />";

    for($i = 1; $i <= 13; $i++){
   
        echo "<h2>Multiplication Table $i</h2>";
        for($n = 1; $n <= 13; $n++){
        echo "$i x $n =" . ($i * $n). "<br />";
    } 
    }


?>