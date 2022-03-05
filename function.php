<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function php</title>
</head>
<body>
    <h3>Check even odd:</h3>

    <?php 

        //function define       
        function isEven($n){
            if($n%2 == 0){
                echo "$n is even number";
            }
            else{
                echo "$n is odd number";
            }
        }
        $x= 13;
        isEven($x) //function call

    ?>
</body>
</html>