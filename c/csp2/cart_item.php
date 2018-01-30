<?php
function display_title() {
	echo "Cart Items";
}
function display_content(){
// session_start();
require 'connectdb.php';
if (isset($_SESSION['cart'])) {
$qtty = $_SESSION['cart'];
$total = 0;
foreach ($qtty as $index => $item) {
// if (isset($index)) {
$sql = "SELECT * FROM products WHERE id = '$index'";
$results = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($results);
extract($row);
if (is_numeric($price) && is_numeric($item)) {
	$subtotal = $price * $item;
}else{
	$subtotal = 0;
	$mes = "<small>  Your Item Quantity is 0 </small>"; 
}
$total += $subtotal;
echo "<div class='col s4'>";
echo "<div class='card'>";
echo "<div class='card-img'>";
echo "<form method='post' action='quantity_change.php?index=$index'>";
echo "<img class='product-image' src='".$image."'><br>";
echo "</div>";
echo "<div class='card-content'>";
echo "<h5 style='color:#ab47bc;'>" .$name. "</h5><br>";
echo $description. "<br>";
echo "<span style='color:#0d47a1;'> Price: </span> ₱" .$price;
echo "<br> Quantity: <input type='number' id='quant' name='quant' min='1' value='$item'>";
echo "<br> Total price: ". $subtotal;
if ($item == 0) {
	echo "<div class='req'> $mes </div>";
}
echo "<input type='submit' id='item_qtty' class='btn' value='Change Quantity'>";
echo "<a href='delete_cart_item.php?index=$index'class='modal-close'><input type='button' class='btn red' value='Remove From Cart'></a>";
echo "</form>";
echo "</div>";
echo "</div>";
echo "</div>";
}
if (isset($total) && $total != 0) {		
echo "<div class='clearfix center'>";
echo "<br>";
echo "<h4> Total:" .$total. "</h4>";
echo "</div>";
}elseif(!isset($item)){
	echo "<small class='req'> Your cart is empty </small>";	
};
}else{
	echo "<small class='req'> Your cart is empty </small>";	
}
};
require 'template.php';
?>
