<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “automobilis”, kuri turi savybes ‐ gamintojas, modelis, metai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ gamintojas, modelis, metai ‐ perduotus parametrus padėtų į savo savybes.
*/

class automobilis {
    public $gam;
    public $mod;
    public $met;
    function __construct($gm, $md, $mt){
        $this->gam = $gm;
        $this->mod = $md;
        $this->met = $mt;
    }
}

