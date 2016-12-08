<?php

try {
    $result = eval("var_dup(1);");
} catch (\Error $e) {
    echo $e->getMessage(), "\n";
    //Call to undefined function var_dup() 
}
try {
    require 'file-with-parse-error.php';
} catch (ParseError $e) {
    echo $e->getMessage(), "\n";
    //syntax error, unexpected end of file, expecting ',' or ';'
}
