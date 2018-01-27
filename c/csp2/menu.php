<?php 
	function display_title(){
		echo "Menu || Bacabac Farmers Producer Cooperative";
	}
	function display_content(){
 	$filter = isset($_GET['category']) ? $_GET['category'] : 'All';
    require 'connectiondb.php'; //
    if(isset($_SESSION['user_level']) && $_SESSION['user_level']==2){
    echo "<button class='btn modal-trigger' id='add_item'  href='#modal1'>Add Item</button>"
	}

	require 'template.php';
?>