<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas asociatyvinis masyvas iš 5 elementų ‐ skaičių. Panaudodami foreach ciklą pakeiskite visus nelyginus skaičius nuliais. Pademonstruokite rezultatą.
 */

$m = [
    'elementas1' => 1,
    'elementas2' => 2,
    'elementas3' => 3,
    'elementas4' => 4,
    'elementas5' => 5,
];

foreach($m as $key => $sk){
    if ($sk % 2 != 0) {
        $m[$key] = 0;
    }
}

var_dump ($m);
