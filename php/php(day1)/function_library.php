<?php
	function factorial($num1){
	echo "<br>-----<br>";
	// $sum1 = 0;
	$product = 1;
	for($d = 1; $d <= $num1; $d++){
		$product *= $d;
		// echo "$product <br>";
		// $sum += $product;
		// echo "$sum1 <br>";

		echo "$d is a factor of : $product <br>";	
	}
	}
?>