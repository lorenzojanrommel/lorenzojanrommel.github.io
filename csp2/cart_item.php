<?php
function display_title() {
	echo "Cart Items";
}
function display_content(){
// session_start();
require 'connectiondb.php';
$qtty = $_SESSION['cart'];
$total = 0;
foreach ($qtty as $index => $item) {
// $string = file_get_contents("assets/json/items.json");
// $items = json_decode($string, true);
$sql = "SELECT * FROM items WHERE id = '$index'";
$results = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($results);
extract($row);
// $img = $row['image'];
// $name = $row['name'];
// $description = $row['description'];
// $price = $row['price'];
$subtotal = $price * $item;
$total += $subtotal;
echo "<div class='col s4'>";
echo "<div class='card'>";
echo "<div class='card-img'>";
echo "<form method='post' action='quantity_change.php?index=$index'>";
echo "<img src='".$image."'><br>";
echo "</div>";
echo "<div class='card-content'>";
echo "<h5 style='color:#ab47bc;'>" .$name. "</h5><br>";
echo $description. "<br>";
echo "<span style='color:#0d47a1;'> Price: </span> ₱" .$price;
echo "<br> Quantity: <input type='number' id='quant' name='quant' min='1' value='$item'>";
echo "<br> Total price: ". $subtotal;
echo "<input type='submit' id='item_qtty' class='btn' value='Change Quantity'>";
echo "<a href='delete_cart_item.php?index=$index'class='modal-close'><input type='button' class='btn red' value='Remove From Cart'></a>";
echo "</form>";
echo "</div>";
echo "</div>";
echo "</div>";
	
// echo $item += $item[$item];
// echo $$item += $price;
};
echo "<div class='clearfix center'>";
echo "<br>";
echo "<h4> Total:" .$total. "</h4>";
echo "</div>";
};
require 'template.php';
?>
