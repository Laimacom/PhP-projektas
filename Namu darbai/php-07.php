<?php
/**
Panaudodami while ciklą sukurkite atsitikinių skaičių (intervale nuo 1 iki 100) masyvą. Panaudodami foreach ciklą suraskite mažiausią nelyginį skaičių masyve.  Pademonstruokite rezultatą.
 */

$m = [];
$i = 0;
while($i < 8){
    $m[] = rand(0, 100);
    $i++;
}

var_dump($m);
echo '<br>';

$min = 99;
foreach($m as $sk){
    if ($sk % 2 != 0 && $sk < $min) {
        $min = $sk;
    }
}

echo $min;
