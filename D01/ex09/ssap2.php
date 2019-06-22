#!/usr/bin/php
<?php

$alpha = array();
$number = array();
$other = array();

$tab = implode(" ", $argv);
$tab = preg_replace('/\s+/', ' ', $tab);
$tab = trim($tab);
$tab = explode(" ", $tab);
$name = array_shift($tab);

foreach ($tab as $elem) {
  if (($elem[0] >= 'a' && $elem[0] <= 'z') || ($elem[0] >='A' && $elem[0] <= 'Z'))
    $alpha[] = $elem;
  else if ($elem[0] >= '0' && $elem[0] <= '9')
    $number[] = $elem;
  else
  	$other[] = $elem;
}

sort($alpha, SORT_STRING | SORT_FLAG_CASE);
rsort($number);
sort($other);

foreach ($alpha as $elem) {
  echo $elem."\n";
}
foreach ($number as $elem) {
  echo $elem."\n";
}
foreach ($other as $elem) {
  echo $elem."\n";
}
?>