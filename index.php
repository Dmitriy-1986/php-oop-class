<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: sans-serif;
            font-size: 18px;
            text-align: center;
        }

        img {
            display: block;
            width: 250px;
            border-radius: 150%;
            margin: 0 auto;
            margin-bottom: 30px;
        }

        p {
            border-top: 1px solid grey;
            padding: 15px;
        }
    </style>
</head>
<body>
    
<?php

class Humman {
    public $name;
    public $surname;
    public $age;
    public $avatar;

    public function aboutMe() {
        return "<p> I  finished ItStep. I\'ve learned JavaScript, React.js, Bootstrap, PHP, MySQL... </p>";
    }
}

$ddf = new Humman();
$ddf->name = 'Dima';
$ddf->surname = 'Dovgal';
$ddf->age = '36';
$ddf->avatar = '<img src=\'https://dovgaldima.pp.ua/assets/image/my-ava.jpg\'>';

print($ddf->avatar); 
print($ddf->name . ' ' . $ddf->surname);
print($ddf->aboutMe());
?>

</body>
</html>