<?php
$a = 2;
while ($a <= 100) {
    $d = 0;
    $b = 2;
    while ($b < $a) {
        if ($a % $b == 0) {
            $d++;
            break;
        }
        $b++;
    }
    if ($d == 0) {
        echo $a;
        echo "<br>";
    }
    $a++;
}