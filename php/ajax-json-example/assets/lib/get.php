<?php
	
	$users = [
		['name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@gmail.com', 'password' => 'abc123'],
		['name' => 'John Smith', 'email' => 'john.smith@gmail.com', 'password' => 'qweasdzxc'],
		['name' => 'John Doe', 'email' => 'john.doe@gmail.com', 'password' => 'zxcasdqwe']
	];

	echo json_encode($users);

?>