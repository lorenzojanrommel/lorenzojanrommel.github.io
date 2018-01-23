<?php

require 'connectiondb.php';
$target_dir = "assets/img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image


$name = $_POST['name'];
$description = $_POST['description'];
$image = $target_file;
$price = $_POST['price'];
$category = $_POST['category_id'];

$sql = "INSERT INTO items (name, description, image, price, category_id) VALUES ('$name', '$description', '$image','$price', '$category')";
mysqli_query($conn, $sql) or die (mysqli_error($conn));
header ('location: menu.php');
?>