<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function manualReverse($text){
        $len = strlen($text) ;
        $reverse = "" ;
        for ($i = $len-1 ; $i >= 0 ; $i--){
            $reverse = $reverse . $text[$i];
        }
        return $reverse ;
     }
     echo manualReverse("ilyas");
    ?>
</body>
</html>