<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php operators</title>
</head>
<body>
    <h3>Arithmatic Operator</h3>
    <?php 
        $a = 30;
        $b = 20;

        $result_add = $a + $b;
        $result_sub = $a - $b;
        $result_multiply = $a * $b;
        $result_division = $a / $b;
        $result_module = $a % $b;
        $result_exponentiation = $a**$b;

        echo "$a + $b = $result_add". "<br>";  
        echo "$a - $b = $result_sub". "<br>";
        echo "$a * $b = $result_multiply". "<br>";
        echo "$a / $b = $result_division". "<br>";
        echo "$a % $b = $result_module". "<br>";
        echo "$a ** $b = $result_exponentiation". "<br>";
    ?>

    <h3>Logical Operator</h3>
    <?php
        $a = true;
        $b = false;


        if($a and $b){
            echo "value a is true and b is false apply with and operator, so result is true <br>";
        }else{
            echo "value a is true and b is false apply with and operator, so result is false <br>";
        }
        if($a or $b){
            echo "value a is true and b is false or a is false b is true apply with or operator, so result is true <br>";
        }else{
            echo "value a is false and b is false or a is true and b is true apply with or operator, so result is false <br>";
        }
        if($a xor $b){
            echo "value a is true and b is false apply with xor operator, so result is true <br>";
        }
        if(!$b){
            echo "value b is false, after apply not operator result is true <br>";
        }
        if($a && $b){
            echo "value a is true and b is true apply with and operator, so result is true <br>";
        }else{
            echo "value a is true and b is false apply with and operator, so result is false <br>";
        }
        if ($a || $b){
            echo "value a is true and b is false or a is false b is true apply with or operator, so result is true <br>";
        }else{
            echo "value a is false and b is false or a is true and b is true apply with or operator, so result is false <br>";
        }
    ?>
    <h3>Comparison Operator</h3>
    <?php
        $a = 5;
        $b = 6;
        echo "a = $a; b = $b: <br>";

        if ($a>$b){
            echo "a greater than b <br>";
        }
        if ($a<$b){
            echo "a less than b <br>";
        }
        if ($a!=$b){
            echo "a not equal b <br>";
        }
        if ($a>=$b){
            echo "a greater than or equal b <br>";
        }
        if ($a<= $b){
            echo "a less than or equal b <br>";
        }
        if($a===$b){
            echo "a identically equal b";
        }
    ?>
</body>
</html>