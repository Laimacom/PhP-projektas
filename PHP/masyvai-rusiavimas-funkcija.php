<?php

$m = [
    ['var' => 'Jonas', 'pav' => 'Jonaitis', 'amz' => 55],
    ['var' => 'Petras', 'pav' => 'Petraitis', 'amz' => 40],
    ['var' => 'Antanas', 'pav' => 'Antanaitis', 'amz' => 43]
];

var_dump($m);
/*usort($m, function($a, $b){
    if ($a['amz'] > $b['amz']) return 1;
    elseif ($a['amz'] == $b['amz']) return 0;
    else return -1;
});*/

function fnc ($a, $b) {               //antras budas
    if ($a['amz'] > $b['amz']) return 1;
    elseif ($a['amz'] == $b['amz']) return 0;
    else return -1;
}

usort($m, 'fnc');
var_dump($m);