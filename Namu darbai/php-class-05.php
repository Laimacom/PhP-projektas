<?php
/**
Sukurkite a klasę su savybe - masyvu. Sukurkite metdą, su kuriuo būtų galima patalpinti į masyvą atsitiktini skaičių intervale nuo 1 iki 100. Sukurkite metodą, kuris suskaičiuoja ir gražina nelyginių skaičių kiekį masyve. Sukurkite b klasę, kuri paveldi a klasę ir joje sukurkite metodą, kuris suskaičiuoja ir gražina lyginių skaičių kiekį. Sukurkite b klasės egzempliorių ir pademonstrukokite visų 3 metodų veikimą.
 **/

class a {
    public $m = [];
    function masyvas(){
        $i = 0;
        while ($i<1) {
        $this->m[] = rand(1, 100);
        $i++;
        }
    }
    function nelyginiai(){
        $kiekis = 0;
        foreach ($this->m as $a) {
            if ($a % 2 != 0) $kiekis++;
        }
        return $kiekis;
    }
}
class b extends a {
    function lyginiai(){
        $kiekis = 0;
        foreach ($this->m as $a) {
            if ($a % 2 ==0) $kiekis++;
        }
        return $kiekis;
    }
}

$o = new a();
$o->masyvas();
$o->masyvas();
$o->masyvas();
var_dump($o);

echo $o->nelyginiai();

$o = new b();
$o->masyvas();
$o->masyvas();
$o->masyvas();
var_dump($o);

echo $o->lyginiai();
