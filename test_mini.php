<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Mini</title>
</head>
<body>
    
<?php

    $angka1 = 3;
    $angka2 = 5;

    for ($i=1; $i <= 100; $i++) { 
        if ($i % $angka1 == 0 && $i % $angka2 == 0){
            echo "tigalima";
            echo "</br>";
        }else if ($i % $angka1 == 0){
            echo "tiga";
            echo "</br>";
        }else if ($i % $angka2 == 0){
            echo "lima";
            echo "</br>";
        }else{
            echo $i;
            echo "</br>";

        }
    }

?>
</body>
</html>