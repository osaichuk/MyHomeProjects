<?php
for ($a = 100; $a <= 200; $a++) {
    $d = 0;
    for ($b = 2; $b < $a; $b++) {
        if ($a % $b == 0) {
            $d++;
            break;
        }
    }
    if ($d == 0) {
        echo $a;
        echo "<br>";
        break;
    }
}