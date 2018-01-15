<?php
	
	$id = $_POST['id'];

	$todos = file_get_contents('assets/json/todos.json');
	$todos = json_decode($todos, true);


	//& >>>>>>>> Permission to edit/modify the value
	foreach ($todos as $key => &$todo) {
		if ($key == $id) {
			if ($todo['done'] == false) {
				$todo['done'] = true;
			}
			else {
				$todo['done'] = false;
			}
		}
	}

	$file = fopen('assets/json/todos.json', 'w');
	fwrite($file, json_encode($todos, JSON_PRETTY_PRINT));
	fclose($file);

?>