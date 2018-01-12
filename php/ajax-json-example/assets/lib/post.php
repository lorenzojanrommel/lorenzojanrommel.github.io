<?php

	$name = $_POST['name'];
	// $newName = $name . ' FizzBuzz';
	$users = [
		['name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@gmail.com', 'password' => 'abc123'],
		['name' => 'John Smith', 'email' => 'john.smith@gmail.com', 'password' => 'qweasdzxc'],
		['name' => 'John Doe', 'email' => 'john.doe@gmail.com', 'password' => 'zxcasdqwe']
	];

	foreach ($users as $key => $value) {
		if($value['name'] === $name){
			echo 'Your name was found';
			break;
		}
	}

	// echo json_encode($name);


?>