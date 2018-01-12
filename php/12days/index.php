<!DOCTYPE html>
<html>
<head>
	<title>12 Days of Christmas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<h1>12 Days of Christmas</h1>


	<?php 

		$counter = 0;

		if (isset($_POST['counter'])) {
			$counter = $_POST['counter'] + 1;
		} else {
			$counter = 0;
		}


		$gifts = ['First Day' => 'a Partridge in a Pear Tree',
				  'Second Day' => 'Two Turtle Doves <br>
				  				   and a Partridge in a Pear Tree',
				  'Third Day' => 'Three French Hens <br>
				  				   Two Turtle Doves <br>
				  				   and a Partridge in a Pear Tree',
				  'Fourth Day' => 'Calling Birds <br>
				  				   Three French Hens <br>
				  				   Two Turtle Doves <br>
				  				   and a Partridge in a Pear Tree',
				  'Fifth Day' => 'Gold Rings <br>
				  				  Calling Birds <br>
				  				  Three French Hens <br>
				  				  Two Turtle Doves <br>
				  				  and a Partridge in a Pear Tree',
				  'Sixth Day' => 'Geese a-Laying <br>
				  				  Gold Rings <br>
				  				  Calling Birds <br>
				  				  Three French Hens <br>
				  				  Two Turtle Doves <br>
				  				  and a Partridge in a Pear Tree',
				  'Seventh Day' => 'Swans a-Swimming <br>
					  				Geese a-Laying <br>
					  				Gold Rings <br>
					  				Calling Birds <br>
					  				Three French Hens <br>
					  				Two Turtle Doves <br>
					  				and a Partridge in a Pear Tree',
				  'Eight Day' => 'Maids a-Milking <br>
				  				  Swans a-Swimming <br>
					  			  Geese a-Laying <br>
					  			  Gold Rings <br>
					  			  Calling Birds <br>
					  			  Three French Hens <br>
					  		      Two Turtle Doves <br>
					  			  and a Partridge in a Pear Tree',
				  'Ninth Day' => 'Ladies Dancing <br>
				  				  Maids a-Milking <br>
				  				  Swans a-Swimming <br>
					  			  Geese a-Laying <br>
					  			  Gold Rings <br>
					  			  Calling Birds <br>
					  			  Three French Hens <br>
					  		      Two Turtle Doves <br>
					  			  and a Partridge in a Pear Tree',
				  'Tenth Day' => 'Lords a-Leaping <br>
				  				  Ladies Dancing <br>
				  				  Maids a-Milking <br>
				  				  Swans a-Swimming <br>
					  			  Geese a-Laying <br>
					  			  Gold Rings <br>
					  			  Calling Birds <br>
					  			  Three French Hens <br>
					  		      Two Turtle Doves <br>
					  			  and a Partridge in a Pear Tree',
				  'Eleventh Day' => 'Pipers Piping <br>
				  					 Lords a-Leaping <br>
				  				  	 Ladies Dancing <br>
				  				  	 Maids a-Milking <br>
				  				  	 Swans a-Swimming <br>
					  			  	 Geese a-Laying <br>
					  			  	 Gold Rings <br>
					  			  	 Calling Birds <br>
					  			  	 Three French Hens <br>
					  		      	 Two Turtle Doves <br>
					  			  	 and a Partridge in a Pear Tree',
				  'Twelfth Day' => 'Drummers Drumming <br>
				  					Pipers Piping <br>
				  					Lords a-Leaping <br>
				  				  	Ladies Dancing <br>
				  				  	Maids a-Milking <br>
				  				  	Swans a-Swimming <br>
					  			  	Geese a-Laying <br>
					  			  	Gold Rings <br>
					  			  	Calling Birds <br>
					  			  	Three French Hens <br>
					  		      	Two Turtle Doves <br>
					  			  	and a Partridge in a Pear Tree'	
				 ];

		$days = array_keys($gifts);


		for ($i=0; $i < count($days);$i++)
		{
			if($i == $counter)
				echo "On the " . $days[$i] . " Of Christmas my true love sent to me" . ' ' . $gifts[$days[$i]] . "<br>";
			elseif ($counter >= 12) {
				$counter = -1;
			}
		}
		// $i = 0;

		// foreach ($gifts as $key => $value) {
		// 	if ($i == $counter)
		// 		echo "On the " . $key . " Of Christmas my true love sent to me:" . ' ' . $value . "<br>";
		// 		$i++;
		// }

		// if($counter >= 11)
		// 	$counter = -1;

	 ?>
	<form method="POST">
	 	<input id="next" class="btn btn-success" type="submit" name="nextDay" value="Next">
	 	<input type="hidden" name="counter" value="<?php echo $counter; ?>">
	</form>
</div>
</body>
</html>