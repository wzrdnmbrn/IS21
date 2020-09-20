<?php

function line($a, $b) {
    if (is_numeric($a) && is_numeric($b)){
        if ($a != 0){
            return[-$b/$a];
        }
    }
    return[];
}

function square ($a, $b, $c) {
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)){
        if ($a == 0){
            return line($b, $c);
        }
        $D = $b*$b - 4*$a*$c ;
        if ($D == 0){
            return[-$b/2*$a];
        }
        if ($D < 0){
            return[];
        }
        return[(-$b - sqrt($D)) / (2 * $a), (-$b + sqrt($D)) / (2 * $a)];
    }
    return[];
}

function cube ($a, $b, $c, $d) {
    if (is_numeric($a) && is_numeric($b) && is_numeric($c) && is_numeric($d)){
        if ($a == 0){
            return square($b, $c, $d);
        }
        if ($a == 0 && $b == 0 ){
            return line($c, $d);
        }
        $B1 = $b / $a;
        $B2 = $c / $a;
        $B3 = $d / $a;
        $p = (- $B1 * $B1 / 3) + $B2;
        $q = (2 * $B1 * $B1 * $B1 / 27 ) - ($B1 * $B2 / 3) + $B3;
        $y = pow(-($q/2) + pow((($q * $q / 4) + ($p * $p * $p / 27)), 1/2), 1/3) + pow(-($q/2) - pow((($q * $q / 4) + ($p * $p * $p / 27)), 1/2), 1/3);

    }
    return[];
}