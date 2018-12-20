<?php
/**
Sukurkite    PHP     skriptą,    kuriame    būtų    aprašytas     vienmas    masyvas     iš    5     elementų     ‐     teksto     eilučių.  Panaudodami     foreach     ciklą     ‐     pakeiskite     visus    masyvo    elementus     ‐     paversdami     tekstą     didžiosiomis  raidėmis. 
 */

$m = ['Dramblys', 'Liūtas', 'Žirafa', 'Gorila', 'Zebras'];
    $i=0;
    foreach($m as $zodis){
        $m[$i++] = strtoupper($zodis);
    }
    var_dump($m);
