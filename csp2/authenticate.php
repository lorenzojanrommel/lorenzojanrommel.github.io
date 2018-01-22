<?php
session_start();

// $string = file_get_contents("assets/json/users.json");
// $users = json_decode($string, true);
// print_r($users);
// exit();
	require 'connectiondb.php';
	
	$username = $_POST['username'];
	$password = sha1($_POST['password']);


	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

	$results = mysqli_query($conn, $sql);

	// print_r($results);
	if (mysqli_num_rows($results)>0) {
		$row = mysqli_fetch_assoc($results);
		$_SESSION['username'] = $username;
		$_SESSION['role'] = $row['role'];
		header('location: home.php');
	}else {
		echo "Failed to login. Incorrect login Credentials <br>";
		echo "please login again <a href='login.php'> Here </a>";
	}

// if(isset($users[$username]) && $users[$username] == $password) {
// 	$_SESSION['username'] = $username;
// 	header('location: home.php');
// }else {
// 	echo "Failed to login. Incorrect login Credentials <br>";
// 	echo "please login again <a href='login.php'> Here </a>";
// }


?>


	