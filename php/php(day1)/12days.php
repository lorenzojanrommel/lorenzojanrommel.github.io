<!DOCTYPE html>
<html>
<head>
	<title>12 Days of Christmas</title>
	<link rel="stylesheet" type="text/css"	href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/12daystyle.css">
<!-- 	<style type="text/css">
		h1 {
			color: red;
		}
	</style> -->
</head>

<body>
	<div class="container">
	<h1><?php echo get_title(); ?></h1>
	<?php
		if (isset($_POST['counter']) && $_POST['counter']!==11){
			$counter = ++$_POST['counter'];
		}else {
			$counter = 0;
		}
		?>
	<div class="well">
		<?php 
		function get_day(){
		$days = array('first',
					  'second',
					   'thrid',
						'fourth',
						'fifth',
						'sixth',
						'seventh',
						'eighth',
						'ninth',
						'tenth',
						'eleventh',
						'twelfth'
					);
			return $days;
		}
		function get_gifts(){
		 $gifts = array(
			"A partridge in a pear tree",
			"Two turtle doves",
			"Three french hens",
			"Four calling birds",
			"Five golden rings",
			"Six geese a-laying",
			"Seven swans a swimming",
			"Eight maids a milking",
			"Nine ladies dancing",
			"Ten lords a leaping",
			"Eleven pipers piping",
			"Twelve drummers drumming"
			);
		 return $gifts();
		}
		$day = get_day();
		$gift = get_gifts();
		for ($x=0; $x<count($day); $x++){
		echo "On the " . $day[$x] . " day of Christmas my true love gave to me: <br>" ;
			for($y=$x; $y>=0; $y--){
				if ($y == 0 && $x!=0) {
				echo "and ";
				}
				echo strtolower($gift[$y]);
				if ($y!=0) {
					echo ", ";
				}else{
					echo ". ";
				}
			};
					echo "<hr>";
			
	};
?>
	<form method="POST">
	 	<input id="next" class="btn btn-success" type="submit" name="nextDay" value="Next">
	 	<input type="hidden" name="counter" value="<?php echo get_lyrics($counter); ?>">
	</form>
	</div>
	</div>
</body>
</html>

<?php


	function get_title(){
		return 'The 12 Days of Christmas';
	};

	?>