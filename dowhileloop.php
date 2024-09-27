<?php

/**
 * Do While Loop
 *
 * Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan
 * do while loop dilakukan setelah perulangan dilakukan
 *
 * oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true
 */

$counter = 100;
do {
    echo "Hello while loop : " . $counter . PHP_EOL;
    $counter++;
} while ($counter <= 100);