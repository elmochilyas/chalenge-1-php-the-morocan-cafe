<?php
session_start();
if (!isset($_SESSION["cart"])){
    $_SESSION["cart"] = [];
}
$product = "";
$message = "";
$itemInCart = 0;
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $product = $_POST["product"];
    if (in_array($product , $_SESSION["cart"])){
        $_SESSION["message"] = "This item : " . $product . " is already existed in the cart";
    }
    else {
        $_SESSION["cart"][] = $product ;
        $_SESSION["message"] = "";
    } 
    header("Location: chal9.php");
    exit;
}
$message = $_SESSION["message"]?? "" ;
$itemInCart = count($_SESSION['cart']); ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" >
        <label>Laptop</label><br>
        <button type="submit" name="product" value="Laptop">Add to Cart</button><br><br>

        <label>Phone</label><br>
        <button type="submit" name="product" value="Phone">Add to Cart</button><br><br>

        <label>Table</label><br>
        <button type="submit" name="product" value="Table">Add to Cart</button><br><br>
        <?php echo $message ?><br>    
        <?php echo "Cart : " . $itemInCart . " items ."?><br>
    </form>
</body>
</html>