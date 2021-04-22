<?php
session_start();
$name = $_POST['name'];
$prix = $_POST['prix'];


$product =  array($name, $prix);
print_r($product);
$_SESSION[$name] = $product;

header('location:formation_detail.php');



?>