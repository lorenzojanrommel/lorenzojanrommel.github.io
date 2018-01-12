<!DOCTYPE html>
<html>
<head>
	<title>GET - POST - SESSION</title>
</head>
<body>


	<form action="authenticate.php" method="POST">
		<label for="username"> Username: </label>
		<input type="text" name="username">
		<label for="password"> Password: </label>
		<input type="password" name="password">
		<input type="submit" name="submit" value="Login">
	</form>

</body>
</html>


	<!-- URL sample http://127.0.0.1/php(day3)/sampleday3.php?input1=hello%20world%3Chr%3E&name=rody -->
<!-- 	Input: <?php echo htmlspecialchars($_GET['input1']); ?>
	<br> <hr>
	Hello: <?php echo htmlspecialchars($_GET['name']); ?> -->