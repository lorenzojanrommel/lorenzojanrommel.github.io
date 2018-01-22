<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'ex3';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	// if ($conn) {
	// 	echo "Connection Suc" ;
	// }
	mysqli_set_charset($conn, 'utf8');
?>