<?php

$first = 'Hello'; // the value Hello is put into the variable $first

$first .= ' world!'; // equiv to $first = $first . ' world!';

echo '<p>' . $first . '</p>';

$a = 99;

$a -= 33; // equiv to $a = $a - 33;

echo '<p>' . $a . '</p>';

$x = 10;
$y = 3;
$z = $x % $y; // remainder

echo '<p>' . $z . '</p>';
