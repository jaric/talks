<?php

function getTotal(float $a, float $b) : int {
    return $a + $b;
}

getTotal(2, "1 week");
// changes int(2) to float(2.0) & string(“1 more”) to float(1.0)
// returns int(3);

getTotal(2.8, "3.2");
// changes string "3.2" to float(3.2)
// returns int(6)

getTotal(2.5, 1); 
// changes int(1) to float(1.0)
// returns int(3)

