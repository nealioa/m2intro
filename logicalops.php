<?php

$x = 100;
$y = 50;

// AND

if ($x >= 100 && $y <= 50) {
    echo '<p>AND successful</p>';
}

$bool = true && false;
var_dump($bool); // false, that's expected

$bool = true and false;
var_dump($bool); // true, ouch!
