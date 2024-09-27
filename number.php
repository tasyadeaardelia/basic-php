<?php

/**
 * Tipe data number
 *
 * - integer ; bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2)
 * - float ; bilangan pecahan
 */

echo "Decimal : ";
var_dump(1234);
echo "Octal : ";
var_dump(0123);
echo "Hexadecimal : ";
var_dump(0x1A);
echo "Binary : ";
var_dump(0b11111111);
echo "Underscore di Number : ";
var_dump(1_234_567);

echo "Floating Point : ";
var_dump(1.234);
echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);
echo "Floating Point dengan E notation Minus (7 x 0.001) : ";
var_dump(7e-3);
echo "Underscore di Floating Point : ";
var_dump(1_234.567);

/**
 * Integer Overflow
 *
 * kalau buat number integer melebihi batas nilai berikut :
 *  2147483648 -> 32 bit os
 *  9223372036854775808 -> 64 bit os
 * maka number nya berubah jadi floating point
 */
echo "Integer Overflow 32 Bit : ";
var_dump(2147483648);
echo "Integer Overflow 64 Bit : ";
var_dump(9223372036854775808);