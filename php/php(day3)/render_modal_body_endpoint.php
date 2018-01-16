<?php
	$index = $_POST['index'];
	$string = file_get_contents("assets/json/items.json");
	$items = json_decode($string, true);
	$img = $items[$index]['img'];
	$name = $items[$index]['name'];
	$description = $items[$index]['description'];
	$price = $items[$index]['price'];

    echo "<div class='col s4'>";
    echo "<form method='post' action='edit.php?index=$index'>"; //to save changes
    echo "<div class='card'>";
    echo "<div class='card-img'>";
    echo "<img src='".$img."'><br>";
    echo "</div>";
    echo "<div class='card-content'>";
    echo "Name: <input type='text' name='name' value='$name'><br>";
    echo "Description: <textarea name='description'> $description</textarea> <br>";
    echo "Price: <input type='number' name='price' min='0' value='$price'><br>";
    echo "<a href='#!' class='modal-close'><input type='button' class='btn red' value='Cancel'></a>" ;
    echo "<input type='submit' id='save' class='btn' value='Save'>";
    echo "<a href='delete.php?index=$index'><input type='button' class='btn red' value='Delete'></a>" ;
    echo "</div>";
    echo "</div>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
?>