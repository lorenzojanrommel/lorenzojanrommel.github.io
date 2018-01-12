<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="12days.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
  </script>
</head>
<body>


<?php

require '12daysfunctions.php';

$day = getLyrics();
$totaldays = count($day);
$gift = gifts();
$title = getTitle();

echo "<h2>$title</h2>";

?>

<div id="lyrics" class="container">
    <?php for ($i = 0; $i < $totaldays; $i++) { ?>
    <div class="slide">
    <?php
    echo "On the $day[$i] day of Christmas, my true love gave to me, <br>";
    for ($x = $i; $x >= 0; $x--) {
        if ($x == 0 && $i != 0) {
            echo "and ";

        }
        echo $gift[$x];
        if ($x != 0) {
            echo ", ";
        } else {
            echo ". <br> <br>";
        }

    }
    ?>
    </div>
    <?php
    }
    ?>
</div>
    <button class="next">NEXT</button>



<script src="js.js"></script>
