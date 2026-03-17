<?php
$host = "localhost";
$dbname = "mydatabase";
$user = "root";
$password = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}catch(PDOException $e){
    die("Connection failed");
}
?>