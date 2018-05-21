<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę skaičiuoklė, kurioje būtų viena savybė - sarašas, kuri bus masyvas, taip pat būtų metodas add(skaičius), kuris prideda naują skaičių į masyvą sąvybę sarašas. Taip pat sukurkite metodą info(), kuris grąžintų masyve sąvybėje esančių elementų kvadratų aritmetinį vidurkį.
 */

class skaiciuokle {
    public $sarasas = [];
    function add ($skaicius){
        $this->sarasas[] = $skaicius;
    }
    function info(){
        $n = 0;
    foreach ($this->sarasas as $sk){
        $n += $sk*$sk;
    }
    return $n /count($this->sarasas);
    }
}

$o = new skaiciuokle();
$o-> add(5);
$o-> add(2);
$o-> add(4);
$o-> add(3);
var_dump($o);
echo $o->info();