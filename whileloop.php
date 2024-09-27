<?php

/**
 * While loop
 * -> versi perulangan yang lebih sederhana dibandingkan for loop
 * hanya terdapat kondisi perulangan tanpa ada init statement dan post statement
 */
$counter = 1;
while ($counter <= 10) {
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
}
