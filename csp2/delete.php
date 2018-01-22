<?php
	
	$index = $_GET['index'];

	$items = file_get_contents('assets/json/items.json');
	$items = json_decode($items, true);

	//delete task form the array $todos
	unset($items[$index]);


	// var_dump($todos);
	// Update JSON file

	$file = fopen('assets/json/items.json', 'w');
	fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
	fclose($file);

	header('location: menu.php');
?>