<?php




$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

function checkOperatonAndCalculate($num1, $num2, $operator){
    $result = 0;
    switch($operator){
        case '+':
            $result = floatval($num1) + floatval($num2);
            break;
        case '-':
            $result = floatval($num1) - floatval($num2);
            break;
        case '/':
            $result = floatval($num1) / floatval($num2);
            break;
        case '*':
            $result = floatval($num1) * floatval($num2);
            break;
        default:
            $result = floatval($num1) + floatval($num2);
            break;
    }
    return $result;
}

    echo checkOperatonAndCalculate($num1, $num2, $operator)
?>