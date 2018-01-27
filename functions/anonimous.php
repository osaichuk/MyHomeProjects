<?php
//$a = function () {
//    echo 'Hello';
//};
// var_dump($a);

function scrIf () {
    echo 1;
    echo 2;
}

function scrElse () {
    echo 3;
    echo 4;
}

function ifElse ($uslov, $script1, $script2) {

    if ($uslov) {
        $script1();
    } else {
        $script2();
    }
}

ifElse(1 > 2, 'scrIf', 'scrElse');

// вместо обьявления двух фукций scrIf и scrElse можно записать эти фукции в параметрах.

// ifElse(1 > 0, function () {echo 1; echo 2;}, function () {echo 3; echo 4;});