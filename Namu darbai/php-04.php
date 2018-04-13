<?php

$m = [1, 2, 3, 4, 5];

/*$suma = 0;
$kiekis = 0;
foreach($m as $sk) {
    if ($sk % 2 ==0) {
        $suma += $sk;
        $kiekis++;
    }
}*/

$suma = 0;
$kiekis = 0;
/*for($i=0; $i<count($m); $i++) {
    if ($m[$i] % 2 == 0) {
        $suma += $m[$i];
        $kiekis++;
    }
}*/

$i = 0;
while($i<count($m)){
    if ($m[$i] % 2 == 0) {
        $suma += $m[$i];
        $kiekis++;
    }
    $i++; //labai svarbu, kad ciklas netaptu nesibaigiantis. ++sustabdo cikla
}

echo $suma / $kiekis;