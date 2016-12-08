<?php

// PHP 5
if (!empty($firstName)) { 
    $name = $firstName;
} else {
    $name = "Guest";
}

// PHP 7
$name = $firstName ?? $username ?? $placeholder ?? “Guest”; 
