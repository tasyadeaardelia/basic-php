<?php

/**
 * Goto Operator
 *
 * fitur ini jarang digunakan di PHP
 * kenapa jarang digunakan? -> karena jika terlalu banyak menggunakan goto operator, kode program aplikasinya
 * akan mudah membingungkan yang membaca kodenya
 *
 * goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
 * Agar goto bisa loncat ke kode program, kita harus membuat label di php dengna menggunakan nama label lalu diakhiri :
 */

$counter = 1;
while (true) {
    echo "While Loop $counter" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";