<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
			padding: 10px;
			border-collapse: collapse;
		}
		tr, th {
			padding: 10px;
			text-align: center;
		}
	</style>
</head>
<body>

<h1><?php echo "Hello World"; ?> </h1>


<?php
require "function_library.php";
echo factorial(5);	
?>
<?php
require_once"function_library.php";
echo factorial(5);	
?>
<?php
// include_once "library.php";
// table_of_content(5);	
?>

</body>
</html>