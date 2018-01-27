<?php
function test(& $a) {
    $a++;
}

$a = 3;

test($a);

var_dump($a);