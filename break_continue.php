<?php

/**
 * Break & Continue
 * break yaitu menghentikan seluruh perulangan
 * continue menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya
 */
$counter = 1;
while (true) {
    echo "Hello break : " . $counter . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        break;
    }
}

for ($counterContinue = 0; $counterContinue <= 100; $counterContinue++) {
    if ($counterContinue % 2 == 0) {
        continue;
    }
    echo "Hello Continue " . $counterContinue . PHP_EOL;
}
