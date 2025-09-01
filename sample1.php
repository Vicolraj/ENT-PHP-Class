<?php
    class Car{
        public $name;
        public $color;
        public function __construct($name, $color){
            $this -> name = $name;
            $this -> color = $color;
        }
    }

    $cars[] = new Car("Toyota", "Red");
    $cars[] = new Car("Toyota", "Red");
    $cars[] = new Car("Toyota", "Red");
    $cars[] = new Car("Toyota", "Red");
    $cars[] = new Car("Toyota", "Red");

    foreach($cars as $car ){
        foreach($car as $carname => $carcolor){
            echo "The $carname is $carcolor <br />"; 
        }
    }

    exit;


    $cars = array(
        "Toyota" => "Red",
        "Camry" => "Pink"
    );

    foreach($cars as $carname => $carcolor){
        echo "The $carname is $carcolor <br />"; 
    }
?>


