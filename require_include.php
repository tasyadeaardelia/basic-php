<?php

/**
 * Pada require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
 * Pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program tetap dijalankan
 *
 * Function require dan include akan selalu mengambil file yang kita inginkan
 * Jika kita beberapa kali menggunakan require dan include file yang sama, maka filte tersebut akan berkali-kali pula kita ambil
 * Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function sehingga
 * jika diambil berkali-kali akan menyebabkan error redeclare function
 * untungnya di PHP terdapat function require_once dan include_once, function ini bisa mendeteksi jika kita sebelumnya pernah
 * mengambil file yang sama maka tidak akan diambil lagi
 */