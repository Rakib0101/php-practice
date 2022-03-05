<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>
<body>
    <h3>Multiply of 7 using for loop:</h3>
    <?php
        $a=7;
        for($i=1; $i<=10; $i++){
            echo "$a * $i =". $a*$i ."<br>";
        }
        
    ?>
    <h3>echo 1-10 using while loop:</h3>
    <?php
        $i = 1;
        while ($i <= 10) {
            echo $i++."<br>";  
        }
    ?>
    <h3>echo 11-20 using do-while loop:</h3>
    <?php
        $i = 11;
        do {
            echo $i++."<br>";  
        }while($i<=20)
    ?>
</body>
</html>