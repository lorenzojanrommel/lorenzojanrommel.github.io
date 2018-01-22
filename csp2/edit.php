<?php
  $index = $_GET['index'];
  // $string = file_get_contents("assets/json/items.json");
  // $items = json_decode($string, true);
  require 'connectiondb.php';
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);

  $sql = "UPDATE items SET
                  name = '$name',
                  description = '$description',
                  price = '$price'
                  WHERE id = '$index'";

  // $items[$index]['name'] = htmlspecialchars($conn, $_POST['name']);
  // $items[$index]['description'] = htmlspecialchars($conn, $_POST['description']);
  // $items[$index]['price'] = htmlspecialchars($conn, $_POST['price']);

  mysqli_query($conn, $sql) or die($mysqli_error($conn));
  // $file = fopen('assets/json/items.json', 'w');
  // fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
  // fclose($file);
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