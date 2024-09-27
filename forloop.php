<?php

// kode perulangan tanpa henti
for (; ;) {
    echo "Hello for loop" . PHP_EOL;
}

// perulangan dengna kondisi
$counter = 1;
for (; $counter <= 10;) {
    echo "Hello for loop : " . $counter . PHP_EOL;
    $counter++;
}

// perulangan dengan init statement
for ($counter = 1; $counter <= 10;) {
    echo "Hello for loop : " . $counter . PHP_EOL;
    $counter++;
}

// perulangan dengan post statement
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Hello for loop : " . $counter . PHP_EOL;
}
