<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 4 parametrus - skaičius, funkcija turi grąžinti rezultatą - visų paduotų parametrų kavdratinių šaknų sumą.
 */

function funkcija ($x, $y, $z, $w){
    /*$o = (sqrt($x) + sqrt($y) + sqrt($z)) * (pi());
    echo $o;*/
    return sqrt($x) + sqrt($y) + sqrt($z)+ sqrt($w);
}

echo funkcija (9, 16, 25, 4);