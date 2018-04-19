<?php
/**
Sukurti funkciją, kuri apjungia du masyvus, pašalina dublikatus iš apjungto masyvo, jį surūšiuoja ir gražina kaip rezultatą. Pademonstruoti funkcijos veikimą.
 */
 $m1 = [1, 14, 36, 9, 4];
 $m2 = [2, 18, 36, 9, 4];

function x($m1, $m2) {
    $m = array_merge($m1, $m2);
    $n = array_unique($m);
    sort ($n);
    var_dump($n);
}

x($m1, $m2);