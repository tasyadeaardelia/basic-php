<?php

/**
 * Dot Operator
 * bisa digunakan untuk menambahkan string dengan data lain
 */
$name = "Tasya Tambunan";
echo "nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";

/**
 * Konversi ke Number dan sebaliknya
 * kalau mau konversi, tinggal tambahkan saja tanda kurung
 */
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

/**
 * Mengakses karakter string
 * Kita bisa akses karakter string sama seperti di array menggunakan kurung siku
 */
$name = "Tasya";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;

/**
 * Variable Parsing
 * kita bisa menggunakan karakter $ untuk mengakses variable khusus string yang menggunakan double quote / heredoc
 */
echo "Helo $name, Selamat Belajar" . PHP_EOL;

/**
 * Curly Brace
 * kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan
 * jika hanya menggunakan variable parsing.
 * Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing.
 */
$var = "var";
echo "This is {$var}s" . PHP_EOL;