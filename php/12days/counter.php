<?php

$counter = 0;

if(isset($_POST['counter'])) {
	$counter = $_POST['counter'] + 1;
} else {
	$counter = 0;
}

$test = $_POST['counter'];

$gifts = ['First Day' => 'a Patridge in a Pear Tree',
		  'Second Day' => 'Two Turtle Doves',
		  'Third Day' => 'Three French Hens',
		  'Fourth Day' => 'Calling Birds',
		  'Fifth Day' => 'Gold Rings',
		  'Sixth Day' => 'Geese a-Laying',
		  'Seventh Day' => 'Swans a-Swimming',
		  'Eight Day' => 'Maids a-Milking',
		  'Ninth Day' => 'Ladies Dancing',
		  'Tenth Day' => 'Lords a-Leaping',
		  'Eleventh Day' => 'Pipers Piping',
		  'Twelfth Day' => 'Drummers Drumming'	
		 ];

foreach ($gifts as $key => $value) {
	if ($test == $value)
		echo $key . " " . $value;
}

?>