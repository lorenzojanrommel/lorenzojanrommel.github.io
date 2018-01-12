<?php
$name = "mel";

echo "My name is $name <br>";
echo 'My is $name <br>';

?>

<?php 
$num = 0;

echo $num++;
echo "<br>";
echo $num;
echo "<br>";
echo ++$num;
echo "<br>";

?>

<?php 
echo 3 + 5 * 3;
echo "<br>";
echo (3 + 5) * 3;
echo "<br>";
?>
<?php
$a = 1; $b = 0;
$x = true && true;
$y = true AND false;
$z = true && false;
if($y){
	echo "true";
}else
	echo "false";

?>
<?php 
$phrase = "hello";
$phrase2 = "the quick brown fox jumps over the lazy dog.";
$phrase3 = "A";
$pos = strpos($phrase2,"fox");
$colors = ["red",
		 "green", 
		 "blue", 
		 "yellow", 
		 "pink",
		"violet"];
echo "<br>-----<br>";
echo "<ul>";
for ($x=0; $x<count($colors); $x++){
// echo "$x <br>";
echo strtoupper("<li style='background-color: $colors[$x];'> $colors[$x] </li>");
}
echo "</ul>";
echo "<br>-----<br>";
for ($f=0; $f<strlen($phrase); $f++) {
echo "$phrase[$f] <br>";
	
}
echo "<br>-----<br>";
echo ($pos);
echo "<br>";
echo strtoupper($phrase);
echo "<br>";
echo strtolower($phrase);
echo "<br>";
echo ucwords($phrase2);
echo "<br>";
echo ucfirst($phrase2);
echo "<br>";
echo "<br>-----<br>";
$ucsecond = strlen($phrase2);
for ($k = 0; $k<$ucsecond; $k++){
	if ($k%2 == 0) {
		echo strtolower("$phrase2[$k]");
	}else
	echo strtoupper("$phrase2[$k]");
}
echo "<br>-----<br>";
echo "$ucsecond";
echo "<br>";
echo strcasecmp($phrase2, $phrase);
echo "<br>";
echo ++$phrase3;
echo "<br>";
echo strpos($phrase2, "q");
echo "<br>";
echo strcmp($phrase2, $phrase3);
echo "<br>";
echo substr($phrase2, 10, 5);
echo "<br>";
echo substr($phrase2, $pos);
echo "<br>";
echo strlen($phrase);
echo "<br>";
// echo substr_replace("quick", "quack", strpos($phrase2,"quick"));

		echo "<br>-----<br>";
?>

<?php
	function table_of_content($by){
	echo "<br>-----<br>";
	echo "<table border=1>";
	echo "<tr>";
	for ($a=0; $a <= $by; $a++) { 
		echo "<th> $a </th>";
	}
	for ($a = 1; $a<=$by; $a++){
		echo "<tr> <th> $a </th>";
		for ($b=1; $b <= $by; $b++) { 
		echo "<td>".$a * $b."</td>";
	}
		echo "</tr>";
	}
	echo "</table>";
		
	}

?>

<?php 
	function summation($num){
	echo "<br>-----<br>";
	$sum = 0;
	for($c = 0; $c <= $num; $c++){
		$sum += $c;
	}
		echo "$sum <br>";
	}
?>



<?php
	echo "<br>-----<br>";
	function print_table($row, $column){
		echo "<table border=1>";
		for ($g=0; $g <$row ; $g++) { 
			echo"<tr>";
			for ($h=0; $h <$column ; $h++) { 
				echo "<td> (content) </td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	// print_table(5, 2);
	// factorial(10);
	// summation(10);
	// table_of_content(15);
	// echo sample_function();
	// echo "$word1 <br>";
	function fix_names ($n1, $n2, $n3){
		$n1 = ucfirst(strtolower($n1));
		$n2 = ucfirst(strtolower($n2));
		$n3 = ucfirst(strtolower($n3));
		// return $n1 . " " . $n2 . " " . $n3 .".";
		return array($n1, $n2, $n3);
	}
	$names = fix_names("JAN", "rommel", "lorenzo");
	echo "$names[2] <br>";
	echo $names [0] . " ". $names[1] ." " .$names[2];


	function sample_function(){
		global $word1; 
		$word1 = ucfirst("hello");
		$word2 = ucfirst("world");
		return $word1 . " " . $word2. "<br>";
	}
	// var_dump($_SERVER);
	echo "<br> request method:" .$_SERVER['REQUEST_METHOD'] . "<br> request uri" . $_SERVER['REQUEST_URI'];
?>
