<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “codeAcademy”, kuri turi savybes ‐ data, skaicius, auditorija. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius, auditorija ‐ perduotus parametrus padėtų į savo savybes.
*/
class codeAcademy {
    public $dat;
    public $skai;
    public $aud;
    function __construct($dt, $sk, $au){
        $this->dat = $dt;
        $this->skai = $sk;
        $this->aud = $au;
    }
}