<?php

$name = 'Fred';

echo '<p>$name</p>';

echo "<p>$name</p>";

$pet = 'crocodile';

echo "<p>I have three {$pet}s</p>";

// Type juggling

$a = '3'; // string
$b = 4; // integer
$result = $a * $b; // integer
var_dump($result);
print_r($result);
echo '<p></p>';

// Type casting

$a = 'Hello';
$result = (bool)$a;
var_dump($result);

$a = '';
$result = (bool)$a;
var_dump($result);

echo '<p></p>';

$a = [];
$result = (bool)$a;
var_dump($result);

echo '<p></p>';

$nums = [1, 2, 3, 4, 5];

echo '<pre>';
var_dump($nums);
echo '</pre>';

echo '<p></p>';

echo '<pre>';
print_r($nums);
echo '</pre>';
