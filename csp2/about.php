<?php
  function display_title(){
    echo "About Page";
}

  function display_content(){
    $ages = [
      'Peter' => 35,
      'Ben' => 37,
      'Joe' => 43,
    ];
    echo $ages['Peter']."<br>";
    echo $ages['Ben']."<br>";
    echo $ages['Joe']."<br>";
    foreach($ages as $key => $value){
      echo "KEY: " .$key . " VALUE: " . $value . "<br>";
  }
}
  require "template.php"
?>
