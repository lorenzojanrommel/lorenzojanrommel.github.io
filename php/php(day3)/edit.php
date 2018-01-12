<?php
  function display_title(){
    echo "Edit Page";
}

  function display_content(){
  	echo $index;
  $string = file_get_contents("assets/json/items.json");
  $items = json_decode($string, true);

    echo "<div class='col s4'>";
    echo "<div class='card'>";
    echo "<div class='card-img'>";
    echo "<img src='".$items['img']."'><br>";
    echo "</div>";
    echo "<div class='card-content'>";
    echo "<h5 style='color:#ab47bc;'>" .$items['name']. "</h5><br>";
    echo $items['description']. "<br>";
    echo "<span style='color:#0d47a1;'> Price: </span> ₱" .$items['price'];
    echo "</div>";
    echo "</div>";
    echo "</div>";
  }

  require "template.php"
?>