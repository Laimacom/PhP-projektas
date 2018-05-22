<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 3 parametrus - skaičius, funkcija turi grąžinti rezultatą - visų paduotų parametrų sumos kvadratinę šaknį.
 */
function funkcija ($x, $y, $z){
    $suma = 0;
    $suma +=$x +=$y +=$z;
    return sqrt($suma);
}

echo funkcija (3, 5, 8);