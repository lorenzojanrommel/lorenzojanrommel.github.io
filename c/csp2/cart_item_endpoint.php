<?php
session_start();

	$quantity = $_POST['item_qtty']; // quantity from the form
	$index = $_GET['index']; // index of item to be added to $_SESSION['cart'];

	//ternary
	$_SESSION['cart'][$index] =
	isset($_SESSION['cart'][$index]) ?
	$_SESSION['cart'][$index] + $quantity : 
	$quantity;
		

	// print_r($_SESSION['cart']);
	header('location: menu.php')
     // require "partials/head.php"
?>