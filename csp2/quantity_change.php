<?php
session_start();

$qtty = $_SESSION['cart'];
$index = $_GET['index'];
$quant = $_POST['quant'];

$_SESSION['cart'][$index] = $quant;

header('location: cart_item.php')

?>