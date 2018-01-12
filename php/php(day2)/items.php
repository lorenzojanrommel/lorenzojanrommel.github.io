

<?php

	$item1 = [
		'name' => 'Apple',
		'description' => 'This is Apple',
		'price' => 1,
		'img' => 'assets/img/fruits/apple.png',
		'category' => 'fruit'
	];
	$item2 = [
		'name' => 'Apple Juice',
		'description' => 'This is Apple Juice',
		'price' => 1,
		'img' => 'assets/img/juice/juiceapple.png',
		'category' => 'juice'
	];
	$item3 = [
		'name' => 'Banana',
		'description' => 'This is Banana',
		'price' => 1,
		'img' => 'assets/img/fruits/banana.png',
		'category' => 'fruit'
	];
	$item4 = [
		'name' => 'Banana Shake',
		'description' => 'This is Banana Shake',
		'price' => 1,
		'img' => 'assets/img/shake/shakebanana.png',
		'category' => 'shake'
	];
	$item5 = [
		'name' => 'Orange',
		'description' => 'This is Orange',
		'price' => 1,
		'img' => 'assets/img/fruits/orange.png',
		'category' => 'fruit',
	];
	$item6 = [
		'name' => 'Grapes',
		'description' => 'This is Grapes',
		'price' => 1,
		'img' => 'assets/img/fruits/grapes.png',
		'category' => 'fruit'
	];

	$items = [$item1, $item2, $item3, $item4, $item5, $item6];

		echo "<div class='col s12'>";
		echo "<div class='row'>";
		echo "<div class='col s12'>";
	foreach ($items as $item) {
		echo "<div class='col s4'>";
		echo "<div class='card'>";
		echo "<div class='card-img'>";
		echo "<img src='".$item['img']."'><br>";
		echo "</div>";
		echo "<div class='card-content'>";
		echo "<h5 style='color:#ab47bc;'>" .$item['name']. "</h5><br>";
		echo $item['description']. "<br>";
		echo "<span style='color:#0d47a1;'> Price: </span> ₱" .$item['price'];
		echo "</div>";
		echo "</div>";
		echo "</div>";
		};
		echo "</div>";
		echo "</div>";
		echo "</div>";
?>
