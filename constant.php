<?php

/**
 * Variable PHP sifatnya mutable (bisa dirubah)
 * Kalau mau buat variable yang immutable (tidak bisa dirubah), gak bisa dilakukan di PHP
 * Sebagai gantinya, ada fitur namanya constant
 * Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
 * Untuk membuat constant kita bisa menggunakan function define()
 * Best practice penggunaan constant adalah menggunakan UPPER_CASE
 */

define("AUTHOR", "Blueskystars");
define("APP_VERSION", 200);

echo AUTHOR;
echo "\n";
echo APP_VERSION;
echo "\n";