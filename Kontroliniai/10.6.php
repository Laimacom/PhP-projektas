<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę countryList, kurioje būtų viena savybė ‐ $countries, kuri bus masyvas, taip pat būtų metodas insert($country), kuris papildo savybę $countries nauja šalimi. Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje esančių šalių pavadinimų ilgio matematinį vidurkį
*/
class countryList
{
    public $countries = [];

    function insert($country){
            $this->countries[] = $country;
        }
    function average(){
        $x=0;
        foreach ($this->countries as $n) {
            $x += strlen($n);
        }
        return $x / count($this->countries);
    }
}

$o = new countryList();
$o->insert('Lietuva');
$o->insert('Latvija');
$o->insert('Estija');
//var_dump($o);
echo $o->average();