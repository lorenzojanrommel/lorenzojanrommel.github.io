<?php
session_start();
require 'connectdb.php';
$target_dir = "assets/img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

$name = $_POST['name'];
$description = $_POST['description'];
$image = $target_file;
$price = $_POST['price'];
$category = $_POST['category_id'];
$owner = $_SESSION['user_id'];

$sql = "INSERT INTO products (name, description, image, price, category_id, owner_user_id) VALUES ('$name', '$description', '$image','$price', '$category', '$owner')";
mysqli_query($conn, $sql) or die (mysqli_error($conn));
header ('location: menu.php');
?>