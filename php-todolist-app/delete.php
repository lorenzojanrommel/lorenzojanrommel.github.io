<?php

	$id = $_POST['id'];

	// echo $id;
	$todos = file_get_contents('assets/json/todos.json');
	$todos = json_decode($todos, true);

	//delete task form the array $todos
	array_splice($todos, $id, 1);


	// var_dump($todos);
	// Update JSON file

	$file = fopen('assets/json/todos.json', 'w');
	fwrite($file, json_encode($todos, JSON_PRETTY_PRINT));
	fclose($file);
?>