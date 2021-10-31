<?php

namespace Kopirka;

/*
 * Округление стоимости
 *
 * @param $num
 * @return float|int
 */
function roundPrice($num) {
    switch ($num) {
        case $num >= 0 && $num <= 10 :
            $multiply_by = 1;
            break;
        case $num > 10 && $num <= 100 :
            $multiply_by = 5;
            break;
        case $num > 100 && $num <= 500 :
            $multiply_by = 10;
            break;
        case $num > 500 && $num <= 1000 :
            $multiply_by = 25;
            break;
        case $num > 1000 :
            $multiply_by = 50;
            break;
        default :
            $multiply_by = 1;
    }

    $res = round($num / $multiply_by) * $multiply_by;
    return $res;
}
