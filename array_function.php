<?php

/**
 * array_keys()
 *      mengambil semua keys milik array
 * array_values()
 *      mengambil semua values milik array
 * array_map()
 *      mengubah semua data array dengan callback
 * sort()
 *      mengurutkan array
 * rsort()
 *      mengurutkan array terbalik
 * shuffle()
 *      mengubah posisi data di array secara random
 *
 */

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump(array_map(fn($data) => $data * 2, $data));

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));
