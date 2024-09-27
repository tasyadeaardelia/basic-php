<?php

/**
 * Nilai NULL merepresentasikan sebuah variable tanpa nilai.
 * Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut,
 * kita bisa pakai NULL, untuk mengosongkan variable tersebut
 *
 * Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)
 */

$name = "Eko";
$name = NULL;

$age = null;

/**
 * Untuk mengecek apakah sebuah data bernilai null, kita bisa pakai function is_null($variable)
 */
$isNull = is_null($name);
var_dump($isNull);

/**
 * Selain menggunakan NULL, kita bisa pakai unset($variable) untuk menghapus sebuah variable
 * Kalau sudah di hapus, kita gak bisa lagi mengakses variable tersebut. Bahkan is_null($variable) pun akan error
 * Agar lebih aman, bisa pakai function isset($variable) untuk mengecek apakah variable ada dan nilainya tidak berubah
 */
$value = 'Tasya';
unset($value);

var_dump(isset($value));

$value = 'Halo brother';
var_dump(isset($value));