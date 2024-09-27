<?php

/**
 * For Each
 */

// without for each
$names = ["Tasya", "Dea", "Ardelia"];
for ($i = 0, $iMax = count($names); $i < $iMax; $i++) {
    echo "Hello $names[$i]" . PHP_EOL;
}

// with for each
foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

// for each dengan key
$person = [
    "first_name" => "Tasya",
    "middle_name" => "Dea",
    "last_name" => "Ardelia"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
