<?php

$arr = [5, 9, 6, 13, 12, 24, 33, 50, 22, 45];

foreach ($arr as $item) {
    if ($item % 3 == 0) {
        echo $item;
        echo "<br>";
    }
}