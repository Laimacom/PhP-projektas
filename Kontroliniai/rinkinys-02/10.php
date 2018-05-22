<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę loto, kurioje būtų viena savybė - $kamuoliukai, kuri bus masyvas, taip pat būtų metodas insert($kamuoliukas), kuris prideda naują kamuoliuko numerį į masyvą sąvybę $kamuoliukai. Taip pat sukurkite metodą vid(), kuris grąžintų masyve sąvybėje esančių elementų matematinį vidurkį.
 */


class loto {
    public $kamuoliukai = [];
    function insert ($kamuoliukas){
        $this->kamuoliukai[] = $kamuoliukas;
    }
    function vid(){
        $n = 0;
        foreach ($this->kamuoliukai as $sk){
            $n += $sk;
        }
        return $n /count($this->kamuoliukai);
    }
}

$o = new loto();
$o-> insert(5);
$o-> insert(2);
$o-> insert(8);
$o-> insert(1);
echo $o->vid();