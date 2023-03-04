<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

class Color {
   const GOLD = '#FFD700';
}

class Car {
    public $model;
    public $color;
}

$bmw = new Car();
$bmw->model = 'BMW';
$bmw->color = Color::GOLD;

print('<pre>');
var_dump($bmw);

/* 
    object(Car)#1 (2) {
        ["model"]=>
        string(3) "BMW"
        ["color"]=>
        string(7) "#FFD700"
    }
*/

?>

</body>
</html>



