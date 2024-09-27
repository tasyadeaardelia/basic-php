<?php

/**
 * Arrow Function
 *
 * - diperkenalkan di PHP 7.4
 * - arrow function & anonymous function adalah dua hal yang sama secara garis besar.
 * - pembedanya :
 *      - arrow function -> secara otomatis variable diluar closure bisa digunakan
 *      anonymous function secara manual menggunakan kata kunci use
 * - pembuatan arrow function tidak menggunakan kata kunci function, melainkan fm
 * - arrow function di khususnya untuk melakukan pembuatan function yang sederhana
 *
 */

$firstName = "Tasya";
$lastName = "Dea";

$sayHelloTasya = fn() => "Hello $firstName $lastName" . PHP_EOL;
echo $sayHelloTasya();