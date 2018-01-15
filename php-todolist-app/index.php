<?php
	$todos = file_get_contents('assets/json/todos.json');
	$todos = json_decode($todos, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP To-Do List</title>
	<!-- Import Font Awesome -->
	<script src="https://use.fontawesome.com/f5cc8e67c1.js"></script>
	  <!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="container">
		<div class="todoContainer blue lighten-5">
		<h1 class="heading">Notes<span><i class="fa fa-pencil" aria-hidden="true"></i></span></h1>
		<div class="row">
		<div class="input-field col s12">
		<label for="addNewTask">Add Notes</label>
		<input type="text" name="" id="addNewTask">
		</div>
		</div>
		<ul>
			<?php
				foreach ($todos as $key => $todo) {
					// echo $todo['done'];
					if ($todo['done'] == false) {
					echo '<li id="'.$key.'"><span><i class="fa fa-trash"></i></span> ' .$todo['task']. '</li>';
					}else // task is completed
					echo '<li id="' .$key. '" class="completed"><span><i class="fa fa-trash"></i></span> ' .$todo['task']. '</li>';
					
				}
			?>
		</ul>

		</div>
	</div>
      
	<!-- Import jQuery -->
	<script type="text/javascript" src="assets/lib/jquery-3.2.1.min.js"></script>
	 <!-- Compiled and minified JavaScript -->
  	 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<!-- Import Custom JS -->
	<script type="text/javascript" src="assets/js/todo.js"></script>
</body>
</html>