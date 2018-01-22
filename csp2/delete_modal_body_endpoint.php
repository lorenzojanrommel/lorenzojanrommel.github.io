<?php
	$index = $_POST['index'];
	// $string = file_get_contents("assets/json/items.json");
	// $items = json_decode($string, true);
    require 'connectiondb.php';
    $sql = "SELECT * FROM items WHERE id = $index";
    $results = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($results);
    extract($row);
	// $img = $items[$index]['img'];
	// $name = $items[$index]['name'];
	// $description = $items[$index]['description'];
	// $price = $items[$index]['price'];

    echo "<div class='col s4'>";
    echo "<form method='post' action='delete.php?index=$index'>"; //to save changes
    echo "<div class='card'>";
    echo "<div class='card-img'>";
    echo "<img src='".$image."'><br>";
    echo "</div>";
    echo "<div class='card-content'>";
    echo "<h5>$name</h5>";
    echo "$description<br>";
    echo "$price<br>";
    echo "<input type='submit' class='btn red atc' value='Yes'></a>" ;
    echo "<a href='#!' class='modal-close'><input type='button' class='btn blue atc' value='No'></a>" ;
    echo "</div>";
    echo "</div>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
?>