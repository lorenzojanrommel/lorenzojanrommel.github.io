<?php
	
	$names = array('Dan', 'Dan P.', 'Jeremy', 'Red', 'Blue');

	if (isset($_POST['suggestion'])) {
		$nameInput = strtolower($_POST['suggestion']);
		if (!empty($nameInput)) {
			foreach ($names as $name) {
				$name = strtolower($name);
				if (strpos($name, $nameInput) !== false) {
					echo ucwords($name) . '<br>';
				};
			};
		};
	};

	// echo $name;

?>