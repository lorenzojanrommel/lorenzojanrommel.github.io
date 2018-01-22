<?php
	
	$index = $_GET['index'];

	// $items = file_get_contents('assets/json/items.json');
	// $items = json_decode($items, true);

	require 'connectiondb.php';
	$sql = "DELETE FROM items WHERE id = $index";
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	//delete task form the array $todos
	unset($items[$index]);


	// var_dump($todos);
	// Update JSON file

	$file = fopen('assets/json/items.json', 'w');
	fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
	fclose($file);

	header('location: menu.php');
?>