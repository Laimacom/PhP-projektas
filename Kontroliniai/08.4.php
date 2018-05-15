<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “miestas”, kuri turi savybes ‐ pavadinimas, gyventojų skaičius, regionas. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, gyventojų skaičius, regionas ‐ perduotus parametrus padėtų į savo savybes.
*/

class miestas
{
    public $pavadinimas;
    public $gyventoju_skaicius;
    public $regionas;

    function __construct($pav, $sk, $reg)
    {
        $this->pavadinimas = $pav;
        $this->gyventoju_skaicius = $sk;
        $this->regionas = $reg;
    }

    function getinfo(){
        $s = "%s, %s, %s.";
        echo sprintf($s, $this->pavadinimas, $this->gyventoju_skaicius, $this->regionas) . '<br>';
    }
}

$o = new miestas('Vilnius', '800000', '2017');
$o->getinfo();