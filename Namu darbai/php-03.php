<?php

$m = [
    'elementas1' => 1,
    'elementas2' => 2,
    'elementas3' => 3,
    'elementas4' => 4,
    'elementas5' => 5,
];

foreach($m as $sk){
    if ($sk & 1) {
        echo $m = 0, '<br>';
    }
    else {
        echo $sk, '<br>';
    }
}
