<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>The Contact Form </h2>
    <form action = "chal7.php" method = "POST">
        <?php   $name = "" ;
                $email = "" ;
                $errorMs = "" ;
                $success = "" ;
                $message = "" ;
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $name = $_POST['user_name'];
                $email = $_POST['user_email'];
                $message = $_POST['message'];
                if(strpos($_POST['user_email'] , '@') === false){
                    $errorMs = "Please enter a valid email  ";
                    $email = "";
                }
                else{$success = "The contact was saved successfully";}
            }  
        ?>
        
        <label for="name">Name:</label>
        <input type="text" name="user_name"  value="<?php echo htmlspecialchars($name)?>" ><br><br>
        
        <label for="email">Email:</label>
        <input type="text" name="user_email" value="<?php echo htmlspecialchars($email)?>" ><br>
        <p style= "color:red;" ><?php echo $errorMs; ?></p>
        
        <label for="message">Message:</label>
        <input type="text" name="message" value="<?php echo htmlspecialchars($message); ?>"><br>
        <input type="submit" value="Submit">
        
        <p style= "color:green;" ><?php echo $success; ?></p>
    </form>   
</body>
</html>