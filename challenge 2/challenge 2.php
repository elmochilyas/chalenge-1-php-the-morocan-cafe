<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $age=5;
        if ($age < 12) {
            $price = 20 ;
            echo "Special: Children's Menu included!<br>";
            
        }
        elseif ($age >= 12 && $age <= 18 ){
            $price = 40 ;
        }
        elseif ($age >= 60){
            $price = 30 ;
        }
        else {
            $price = 60 ;
        }
        echo "The Price is :" . $price . "DH";
    ?>
</body>
</html>