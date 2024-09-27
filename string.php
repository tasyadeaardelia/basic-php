<?php

// single quote
echo 'Nama : ';
echo 'Tasya Tambunan';

// double quote
echo "\n";
echo "nama : ";
echo "Eko\t Kurniawan\t Khannedy\n";

/**
 * Multiline String
 *
 * Kalau mau buat string lebih dari satu baris, kita bisa gunakan \n sebagai ENTER.
 * Tapi PHP memiliki fitur yang lebih baik, bernama Heredoc dan Nowdoc
 */

/**
 * Herodoc adalah fitur untuk membuat string yang panjang, sehingga kita tidak perlu manual melakukan
 * enter, tab dan yang lain-lain secara manual
 */
echo <<<Halo
Ini adalah contoh string yang sangat panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
Halo;
echo "\n";

/**
 * Nowdoc mirip seperti Herodoc, bedanya adalah Nowdow tidak memiliki kemampuan
 * parsing seperti di Herodoc atau Double Quote.
 */
echo <<<'HALO'
Ini adalah contoh string yang sangat panjang, dan juga gak perlu
ngetik ENTER secara manual, "bisa quote" juga
HALO;

