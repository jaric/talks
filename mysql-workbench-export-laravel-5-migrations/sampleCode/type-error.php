<?php

function add(int $left, int $right) {
    return $left + $right;
 }

try {
     echo add('left','right');
 } catch (\TypeError $e) {

     // Log error and end gracefully
     echo $e->getMessage(), "\n";
     // Argument 1 passed to add() must be of the type integer, string given
 } 
