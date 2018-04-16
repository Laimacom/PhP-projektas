<?php
/**
Sukurkite tekstų masyvą. Panaudodami for ciklą suraskite žodžius kuriuose yra simbolis "a" ir sudėkite juos į kitą (naują) masyvą.  Pademonstruokite rezultatą.
 */

$m = ['Dramblys', 'Liutas', 'Zirafa', 'Gorila', 'Zebras', 'Gyvate', 'Meska', 'Koala', 'Pele', 'Tigras'];


$a = 'a';
$naujasmasyvas = [];
for ($i = 0; $i <count($m); $i++){
    if (strpos($m[$i], $a) !==false) {
        $naujasmasyvas[] = $m[$i];
    }
}
var_dump($naujasmasyvas);