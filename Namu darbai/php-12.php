<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 3 parametrus ‐ skaičius, funkcija turi grąžinti rezultatą ‐ visų paduotų parametrų kavdratinių šaknų sumą padaugintą iš pi.
*/

function funkcija ($x, $y, $z){
    /*$o = (sqrt($x) + sqrt($y) + sqrt($z)) * (pi());
    echo $o;*/
    return (sqrt($x) + sqrt($y) + sqrt($z)) * pi();
}

echo funkcija (9, 16, 25);

