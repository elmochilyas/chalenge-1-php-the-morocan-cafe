<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function isAdult ($age){return ($age >= 18);}
    if (isAdult(10) == true){echo "Access Granted";}
    else {echo "Access Denied";}
    ?>
</body>
</html>