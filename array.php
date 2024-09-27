<?php

/**
 * punya panjang dinamis
 * bisa berisi data kosong atau banyak data
 * bisa berisi data dengan jenis berbeda-beda
 */

// membuat array
$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);

/**
 * Operasi Array
 *
 * $array[index] : Mengakses data di array pada nomor index
 * $array[index] = value : Mengubah data di array pada nomor index dengan value baru
 * $array[] = value : Menambah data di array pada posisi paling belakang
 * unset($array[$index]) : Menghapus data di array, index otomatis hilang dari array
 * count($array) : Mengambil total data di array
 */
var_dump($names[0]);
$names[0] = "Budi";
var_dump($names);
unset($names[1]);
var_dump($names);
$names[] = "Willy";
var_dump($names);
var_dump(count($names));

/**
 * Array sebagai Map
 *
 * Map -> asosiasi antara key dan value
 * di PHP, Map bisa dibuat menggunakan Array
 * Secara default, Array akan menggunakan index (number) sebagai key dan valuenya kita bisa bebas
 * memasukkan data ke dalam array
 */

$tasya = array(
    "id" => "Tasya",
    "name" => "Tasya Tambunan",
    "age" => 23
);

$sania = array(
    "id" => "Sania",
    "name" => "Sania Nainggolan",
    "age" => 23
);

// array didalam array
$eko = array (
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
);
