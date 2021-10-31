<?php

namespace Kopirka;

/*
 * Округление стоимости
 *
 * @param $value
 * @return float|int
 */
function roundPrice($value) {
    switch ($value) {
        case $value >= 0 && $value <= 10 :
            $num = 1;
            break;
        case $value > 10 && $value <= 100 :
            $num = 5;
            break;
        case $value > 100 && $value <= 500 :
            $num = 10;
            break;
        case $value > 500 && $value <= 1000 :
            $num = 25;
            break;
        case $value > 1000 :
            $num = 50;
            break;
        default :
            $num = 1;
    }

    $res = round($value / $num) * $num;
    return $res;
}
