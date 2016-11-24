<?php

function getTotal(float $a, float $b) {
        return $a + $b;
}
getTotal(2, "1 week"); 
// int(2) changed to float(2.0) and string “1 week” changed to float(1.0) 
// but you will get a “Notice: A non well formed numeric value encountered”
// returns float(3)

getTotal(2.8, "3.2");
// string "3.2" changed to float(3.2) no notice
// returns float(6)

getTotal(2.5, 1);
// int(1) changed to float(1.0)
// returns float(3.5)

