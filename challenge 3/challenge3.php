<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $table = [
            ["omar" , 100],
            ["simo6", 250],
            ["ahmed",60],
            ["brahim",50],
            ["alal",150]
        ];
        $length = count($table);
        $total = 0;
        for($i = 0; $i < $length ; $i++ ){
            $total = $total + $table[$i][1];
            if ($table[$i][1]>100){
                echo $table[$i][0] . "  owe me :  " . $table[$i][1] . " DH<br>";
            }
        };
    ?>
</body>
</html>