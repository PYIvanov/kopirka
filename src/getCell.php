<?php

namespace Kopirka;

/*
 * Получение номера ячейки Excel
 *
 * @param int $x
 * @param int $y
 * @return string
 */
function getCell(int $x, int $y): string {
    $s = ''; // result
    do {
        $r = ($x-1) % 26 ;      // remainder
        $x = intdiv($x-1, 26);  // quotient
        $s = chr(65+$r) . $s;   // intermediate result
    } while ($x > 0);
    return $s.$y;
}


