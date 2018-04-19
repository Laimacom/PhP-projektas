<?php
/**
Sukurkite skaičių masyvą. Sukurkite funkciją, kuri atsitiktiniu būdu gražina elementą iš masyvo. Pademostruokite jos veikimą.
 */

$m =[2, 4, 8, 15, 19, 3];

function x($m){
    $sk = array_rand($m);
    echo $m[$sk];
}

x($m);    //taip kvieciam funkcija, kad ji pradetu veikti

