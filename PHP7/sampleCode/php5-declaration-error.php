<?php 

function stringTest(string $string) {
    echo $string;
}
/
stringTest("Hello World!");
//in PHP 5
//PHP Catchable fatal error:  Argument 1 passed to stringTest() must be an instance of string, string given

stringTest("Hello World!");
//in PHP 7
//Hello World!

