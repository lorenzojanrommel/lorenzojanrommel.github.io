<?php
session_start();

$string = file_get_contents("assets/json/users.json");
$users = json_decode($string, true);
// print_r($users);
// exit();

$username = $_POST['username'];
$password = $_POST['password'];


if(isset($users[$username]) && $users[$username] == $password) {
	$_SESSION['username'] = $username;
	header('location: home.php');
}else {
	echo "Failed to login. Incorrect login Credentials <br>";
	echo "please login again <a href='login.php'> Here </a>";
}


?>


	