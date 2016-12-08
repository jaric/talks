<?php 
$arr = [9, 4, 8, 7, 9, 4, '狂'];

// PHP 5
usort($arr, function ($a, $b) {
    if ($a < $b) {
        return -1;
    } elseif ($a > $b) {
        return 1;
    } else {
        return 0;
    }
});

// PHP 7
usort($arr, function ($a, $b) {
    return $a <=> $b;
});

/*
$arr = ['狂', 4, 4, 7, 8, 9, 9];
*/
