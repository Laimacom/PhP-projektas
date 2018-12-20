<?php
/**
Panaudodami     prieš     tai     sukurtą     klasę     person,     sukurkite     klases     staﬀ     ir     client,    kurios    paveldi     person  klasę.    Person    klasę    papildykite    metodu     “asmendDuomenys”,    kuris     išvestų     suformatuotą     eilutę  “Vardas     Pavardė     (amžius)”.    Staﬀ     klasėje    perrašykite     metodą    asmensDuomenys,    pakeisdami  išvedamą    eilutę     į     “Pavardė    Vardas,    darbuotojas”.     Darbuotojas     ‐     esiog     paprastas     žodis. 
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
    function asmensDuomenys (){
        $s  = "%s %s (%s)";
        echo sprintf($s, $this->name, $this->surname, $this->age) . '<br>';
    }
}
class staff extends person {
    function asmensDuomenys (){
        $s  = "%s %s, darbuotojas";
        echo sprintf($s, $this->name, $this->surname) . '<br>';
    }
}
class client extends person {

}

$o = new person('Jonas', 'Jonaitis', '48');
$o->asmensDuomenys();
$o = new staff('Jonas', 'Jonaitis', '48');
$o->asmensDuomenys();
$o = new client('Petras', 'Petraitis', '30');
$o->asmensDuomenys();

