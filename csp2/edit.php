<?php
  $index = $_GET['index'];
  $string = file_get_contents("assets/json/items.json");
  $items = json_decode($string, true);
  $items[$index]['name'] = htmlspecialchars($_POST['name']);
  $items[$index]['description'] = htmlspecialchars($_POST['description']);
  $items[$index]['price'] = htmlspecialchars($_POST['price']);

  $file = fopen('assets/json/items.json', 'w');
  fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
  fclose($file);
  header('location: menu.php');
    // echo "<div class='col s4'>";
    // echo "<div class='card'>";
    // echo "<div class='card-img'>";
    // echo "<img src='".$img."'><br>";
    // echo "</div>";
    // echo "<div class='card-content'>";
    // echo "Name: <input type='text' name='name' value='$name'><br>";
    // echo "Description: <textarea> $description</textarea> <br>";
    // echo "Price: <input type='number' min='0' value='$price'><br>";
    // echo "<a href='menu.php'><input type='button' class='btn red' value='Cancel'></a>" ;
    // echo "<input type='submit' class='btn' value='Save'";
    // echo "</div>";
    // echo "</div>";
    // echo "</div>";
    // echo "</div>";
?>