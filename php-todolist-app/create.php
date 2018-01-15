<?php
	// retrieve data from front-end
 	$newTask = $_POST['task'];
 	//open json file
 	$todos = file_get_contents('assets/json/todos.json');
 	$todos = json_decode($todos, true);
 	// echo $newTask;


 	// append new task to array $todos
 	array_push($todos, array('task' => $newTask, 'done' => false));
 	// var_dump($todos);

 	// update json file
 	$file = fopen('assets/json/todos.json', 'w');
	fwrite($file, json_encode($todos, JSON_PRETTY_PRINT));
	fclose($file);

	//return id of new task to front-end
	$id = count($todos) - 1;
	echo $id;
?>