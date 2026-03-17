<?php
$host = "localhost";
$dbname = "chal7";
$user = "root";
$password = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}catch(PDOException $e){
    die("Connection failed");
}
?>