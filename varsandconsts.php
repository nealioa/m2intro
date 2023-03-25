<?php
// Variables

//$4site = 'not yet';

$fourSite = 'not yet';

echo '<p>' . $fourSite . '</p>';

// Constants

define('PI', 3.1415927);

const EULER = 2.7182818;

if (PI < 4) {
    define('HEIGHT', '100vh');
//    const WIDTH = '90vw'; // error - const not allowed here in block
}

echo '<p>' . HEIGHT . '</p>';

$testVar = null;
echo '<p>$testVar is: ' . $testVar . '</p>';
echo '<p>' . gettype($testVar) . '</p>';

$address = '10 High Street';
$result = $address * 5;

echo '<p>' . $result . '</p>';

$address = 'High Street 10';
$result = $address * 5;

echo '<p>' . $result . '</p>';

$name = 'Neal';
$name = 99;

echo '<p>Finished now!</p>';
