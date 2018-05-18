<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “preke”, kuri turi savybes ‐ kodas, pavadinimas, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ kodas, pavadinimas, kaina ‐ perduotus parametrus padėtų į savo savybes.
*/

class preke
{
    public $kodas;
    public $pavadinimas;
    public $kaina;

    function __construct($kod, $pav, $kai)
    {
        $this->kodas = $kod;
        $this->pavadinimas = $pav;
        $this->kaina = $kai;
    }

    function getinfo(){
        $s = "%s, %s, %s.";
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina) . '<br>';
    }
}

$o = new preke('836483', 'Pienas', '1');
$o->getinfo();