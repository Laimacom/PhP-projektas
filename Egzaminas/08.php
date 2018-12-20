<?php
/**
Sukurkite    PHP     skriptą,    kuriame    būtų    aprašyta    klasė     “person”,    kuri     turi     savybes     ‐     name,     surname,  age.     Sukurkite     standarnį    klasės     __construct    metodą,     kuriam    perdavus     tris     parametrus     ‐     name,  surname     ir     age     ‐     perduotus    parametrus     padėtų     į     savo     savybes. 
 */

class person
{
    public $name;
    public $surname;
    public $age;

    function __construct($n, $s, $a)
    {
        $this->name = $n;
        $this->surname = $s;
        $this->age = $a;
    }

}

$o = new person('Jonas', 'Jonaitis', '48');
var_dump($o);