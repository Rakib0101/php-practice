<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>if-else condition</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;
        echo "a = $a and b = $b <br>";
        if($a> $b){
            echo "a is greater than b";
        }else if($a < $b){
            echo "a is less than b";
        }
        else{
            echo "a equal to b";
        }
    ?>
</body>
</html>