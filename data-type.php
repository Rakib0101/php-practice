<?php 

    // according to php.net PHP supports ten primitive types.
    $a = true; //boolean type
    $b = 10;  //inteager type
    $c = 10.10;  //float type
    $d = "Rakibul Islma";  //string type

    echo gettype($a) . "<br>"; //gettype use for checking type of variable
    echo gettype($b) . "<br>"; //gettype use for checking type of variable
    echo gettype($c) . "<br>"; //gettype use for checking type of variable
    echo gettype($d) . "<br>"; //gettype use for checking type of variable

    var_dump($a);  //var_dump also use for checking type of and its also show detail info 
    echo "<br>";
    var_dump($b);  //var_dump also use for checking type of and its also show detail info 
    echo "<br>";
    var_dump($c);  //var_dump also use for checking type of and its also show detail info 
    echo "<br>";
    var_dump($d);  //var_dump also use for checking type of and its also show detail info 
    echo "<br>";
?>