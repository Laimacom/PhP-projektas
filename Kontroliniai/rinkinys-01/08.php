<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “dviratis”, kuri turi savybes - gamintojas, modelis, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus - gamintojas, modelis, kaina - perduotus parametrus padėtų į savo savybes.
 */

class dviratis
{
    public $gamintojas;
    public $modelis;
    public $kaina;

    function __construct($g, $m, $k)
    {
        $this->gamintojas = $g;
        $this->modelis = $m;
        $this->kaina = $k;
    }

}

$o = new dviratis('Unibike', 'XPJ', '800');
var_dump($o);