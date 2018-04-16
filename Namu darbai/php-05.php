<?php
/**
Sukurkite tekstų masyvą ne mažiau 10 elementų. Panaudodami for ciklą suraskite trumpiausią žodį.  Pademonstruokite rezultatą.
 */

$m = ['Dramblys', 'Liutas', 'Zirafa', 'Gorila', 'Zebras', 'Gyvate', 'Meska', 'Koala', 'Pele', 'Tigras'];


$trumpiausias = '';
$zodzioIlgis = 1000;
for ($i = 0; $i < count($m); $i++) {
    if (strlen($m[$i]) < $zodzioIlgis) {
        $trumpiausias = $m[$i];
        $zodzioIlgis = strlen($m[$i]);
    }
}
echo 'Trumpiausias zodis: ' . $trumpiausias;