<?php
$numbers = range(1, 10);
print_r($numbers);
echo '<br>';
foreach ($numbers as $numberKey => $number) {
    $numbers[$numberKey] = $number * 2;
}
print_r($numbers);
echo '<br>';

foreach ($numbers as & $item) {
    $item *= 2;
}
var_dump($numbers);
echo '<br>';
unset($item);
var_dump($numbers);