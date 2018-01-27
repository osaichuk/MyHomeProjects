<?php
$stack = ['banana', 'orange', 345, 3.14,];
array_push($stack, 'carrot', 44, 'onion');
print_r($stack);

echo "<hr>";
$firstStack = array_shift($stack);

echo $firstStack . "<br>";
print_r($stack);