<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 5 elementų ‐ teksto eilučių. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidėmis.
 */

$m = ['vienas','du','trys','keturi','penki'];
/*foreach($m as $zodis){
    $n[] = strtoupper($zodis);
}
var_dump($n);*/
$i=0;
foreach($m as $zodis){
    $m[$i++] = strtoupper($zodis);
}
var_dump($m);