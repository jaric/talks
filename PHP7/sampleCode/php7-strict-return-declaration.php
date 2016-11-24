<?php

declare(strict_types=1);

function getTotal(float $a, float $b) : int {
    // return $a + $b;
    // Fatal error: Uncaught TypeError: 
    // Return value of getTotal() must be of the type integer, float returned
    return (int)($a + $b); // truncate float like non-strict
 }

getTotal(2.5, 1); // changes int(1) to float(1.0) and returns int(3)
