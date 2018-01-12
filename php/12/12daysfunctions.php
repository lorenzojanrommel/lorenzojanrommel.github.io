<?php

function getTitle() {
  return '12 Days of Christmas';
}

function getLyrics() {
  $days = [
    'first',
    'second',
    'third',
    'fourth',
    'fifth',
    'sixth',
    'sevent',
    'eighth',
    'nineth',
    'tenth',
    'eleventh',
    'twelfth'
  ];

  return $days;
}



function gifts() {
  $gifts = [
    'a partridge in a pear tree',
    'Two turtle doves',
    'Three French hens',
    'Four calling birds',
    'Five golden rings',
    'Six geese-a-laying',
    'Seven swans-a-swimming',
    'Eight maids-a-milking',
    'Nine ladies dancing',
    'Ten lords-a-leaping',
    'Eleven Pipers Piping',
    'Twelve drummers drumming'
  ];
  return $gifts;
}

?>