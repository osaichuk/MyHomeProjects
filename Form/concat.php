<?php

echo 1 . 2 . 3 . 4 . 5;

$a = false && true || false && true || !false && true;

echo "<hr>";

var_dump($a);

echo "<hr>";

$x = rand(1,9);

echo $x;
echo "<br>";

if ($x % 2) {
	echo "false";
	} 
	else {
	echo "true";
	}

echo "<hr>";

$b = 6;
$q = 9;

$b = $b + $q;

$q = $b - $q;

$b = $b - $q;

echo $b, $q;