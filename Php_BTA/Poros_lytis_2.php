<?php
$zmones = [
    array('vardas' => 'Jonas', 'lytis' => 'V'),
    array('vardas' => 'Ona', 'lytis' => 'M'),
    array('vardas' => 'Petras', 'lytis' => 'V'),
    array('vardas' => 'Marytė', 'lytis' => 'M'),
    array('vardas' => 'Eglė', 'lytis' => 'M'),
];

foreach ($zmones as $indeksas1 => $zmogus1) {
    foreach ($zmones as $indeksas2 => $zmogus2) {
        foreach ($zmones as $indeksas3 => $zmogus3) {
            if (($indeksas1 < $indeksas2 && $indeksas2 < $indeksas3) && $zmogus1['lytis'] != $zmogus2['lytis'] ) {
                echo "<br>" .
                    $indeksas1 . " " .
                    $zmogus1['vardas'] . " - " .
                    $indeksas2 . " " .
                    $zmogus2['vardas']. " - " .
                    $indeksas3 . " " .
                    $zmogus3['vardas'];
            }
        }
    }
}