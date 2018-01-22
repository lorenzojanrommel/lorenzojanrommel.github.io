<?php
	$index = $_POST['index'];
	// $string = file_get_contents("assets/json/items.json");
	// $items = json_decode($string, true);
    require 'connectiondb.php';
    $sql = "SELECT * FROM items WHERE id = '$index'";
    $results =  mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($results);
    extract($row);
	// $img = $items[$index]['img'];
	// $name = $items[$index]['name'];
	// $description = $items[$index]['description'];
	// $price = $items[$index]['price'];

    echo "<div class='col s3'>";
    echo "</div>";
    echo "<div class='col s6'>";
    echo "<form method='post' action='edit.php?index=$index'>"; //to save changes
    // echo "<div class='card'>";
    // echo "<div class='card-img'>";
    echo "<img src='".$image."'><br>";
    // echo "</div>";
    echo "<div class='card-content'>";
    echo "Name: <input type='text' name='name' value='$name'><br>";
    echo "Description: <textarea name='description'> $description</textarea> <br>";
    echo "Price: <input type='number' name='price' min='0' value='$price'><br>";
    echo "<input type='submit' id='save' class='btn atc l' value='Save'>";
    echo "<a href='#!' class='modal-close'><input type='button' class='btn red atc' value='Cancel'></a>" ;
    // echo "</div>";
    // echo "</div>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
?>