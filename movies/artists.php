
<?php
require 'connection.php';

if (isset($_GET['delete_id'])) {
	$id = $_GET['delete_id'];
	$sql = "DELETE FROM artists WHERE id = $id";
	mysqli_query($conn, $sql);
}
//When click add song
if (isset($_POST['add_artists'])) {
	$new_artists = $_POST['artist'];
	$sql = "INSERT INTO artists (name) 
			VALUES ('$new_artists')";
	mysqli_query($conn, $sql);
};

echo "<div class='container'>";
echo "<h2>ARTISTS</h2>
<table border=1>
	
<tr>
	<th>Artist</th>
	<th>Delete</th>
</tr>";
$sql = "SELECT * FROM artists";// query definition/creation
$result = mysqli_query($conn, $sql); //we run the query 
// print_r($result); // $result is still Object
while($row = mysqli_fetch_assoc($result)){  // Convert to associative array
	// print_r($row); // $result is now assiciative array
	// echo "<hr>";
	$id = $row ['id'];
	$name = $row['name'];
	echo "<tr>
			<td>$name </td>
			<td><a href='artists.php?delete_id=$id'> <button class='btn red'> Delete </button></a></li></td> 
			</tr>";
	};
	echo "</table>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="utf-8">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	    <!-- Compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	  	<!--Custome Stylesheet -->
	  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
	          
	  <!-- Compiled and minified JavaScript -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	  <script type="text/javascript" src="assets/js/javascriptjs.js"></script>

	  <!-- import font awesome -->
	  <script src="https://use.fontawesome.com/f9c4685502.js"></script>
	<title>Artists Page</title>
</head>
<body>

<form method="POST">
	<br>
	<label for="artist">Artist </label>
	<input type="text" name="artist"> <br> 
	<input type="submit" name="add_artists" value="Add Artists" class="btn">
</form>
</div>
</body>
</html>

