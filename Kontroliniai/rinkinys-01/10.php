<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę taupyklė, kurioje būtų viena savybė - $pinigai, kuri bus masyvas, taip pat būtų metodas add($pinigas), kuris prideda naują pinigą į masyvą sąvybę $pinigai. Taip pat sukurkite metodą vidurkis(), kuris grąžintų masyve sąvybėje esančių elementų matematinį vidurkį.
 */


class taupykle {
    public $pinigai = [];
    function add ($pinigas){
        $this->pinigai[] = $pinigas;
    }
    function vidurkis(){
        $n = 0;
        foreach ($this->pinigai as $sk){
            $n += $sk;
        }
        return $n /count($this->pinigai);
    }
}

$o = new taupykle();
$o-> add(50);
$o-> add(20);
$o-> add(20);
$o-> add(10);
echo $o->vidurkis();