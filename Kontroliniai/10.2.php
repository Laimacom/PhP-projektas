<?php
/*
Padaryti klasę personalas. Sukurti funkciją persona. Parametrai: a) vardas, b) pavardė, c) lytis. Funkcija turi patalpinti personos duomenis kaip asociatyvinį masyvą į klasės savybę darbuotojai (paprastas masyvas). Sukurti funkciją kiekMoteru kuri gražina personalo moterų skaiciu. Sukurti funkciją kiekVyru kuri gražina personalo vyrų skaičių.
*/

class personalas{
    public $darbuotojai = [];

    function persona($v, $p, $l){
        $this->darbuotojai[] = [
            'vardas' => $v,    //raktas 'vardas', raktas 'lytis'
            'pavarde' => $p,
            'lytis' => $l
        ];
    }
    function kiekMoteru(){
        $m = 0;
        foreach ($this->darbuotojai as $a) {
            if ($a['lytis'] == 'mot') $m++;
        }
        return $m;
    }
    function kiekVyru(){
        $m = 0;
        foreach ($this->darbuotojai as $a) {
            if ($a['lytis'] == 'vyr') $m++;
        }
        return $m;
    }
}

$o = new personalas();
$o->persona('Jonas', 'Jonaitis', 'vyr');
$o->persona('Kristina', 'Kalvaite', 'mot');
$o->persona('Petras', 'Petraitis', 'vyr');
$o->persona('Ieva', 'Pauliene', 'mot');
$o->persona('Sigita', 'Joniene', 'mot');
var_dump($o);

echo 'Moteru yra: ' . $o->kiekMoteru();
echo '<br>';
echo 'Vyru yra: ' . $o->kiekVyru();
