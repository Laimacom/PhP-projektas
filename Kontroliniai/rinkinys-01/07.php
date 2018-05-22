<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 7 elementų - teksto eilučių. Panaudodami foreach ciklą - pakeiskite visus masyvo elementus - paversdami tekstą mažosiomis raidėmis.
 */

$m = ['Dramblys', 'Liutas', 'Zirafa', 'Gorila', 'Zebras', 'Gyvate', 'Meska'];
    $i=0;
    foreach($m as $zodis){
        $m[$i++] = strtolower($zodis);
    }
    var_dump($m);
