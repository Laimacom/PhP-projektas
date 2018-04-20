<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “automobilis”, kuri turi savybes ‐ gamintojas, modelis, metai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ gamintojas, modelis, metai ‐ perduotus parametrus padėtų į savo savybes
*/

class automobilis{
    public $gam;
    public $mod;
    public $met;
    function __construct($gm, $md, $mt){
        $this->gam= $gm;
        $this->mod= $md;
        $this->met= $mt;
    }
    function getinfo(){
        $s  = "Automobilis: %s, %s, %s.";
        echo sprintf($s, $this->gam, $this->mod, $this->met) . '<br>';
    }
}

$o = new automobilis('VW', 'Sharan', '2017');
$o->getinfo();