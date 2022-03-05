<?php
    $x = 10;
    $y = 15;

    $result_plus = $x+$y;
    $result_minus = $x-$y;
    $result_multiply = $x*$y;
    $result_division = number_format($x/$y, 2); //number format use for mention decimal point number

    echo "$x + $y = $result_plus <br>" ;
    echo "$x - $y = $result_minus <br>";
    echo "$x * $y = $result_multiply <br>";
    echo "$x / $y = $result_division";
?>