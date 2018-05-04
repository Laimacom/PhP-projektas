<?php
/**
Sukurkite klasę su prekių sąrašu. Sukurkite metodą, kurio pagalba galima patalpintį į sąrašą duomenis apie prekes: pavadinimas, kaina, kiekis. Sukurkite metodą, kuris gražina prekių sąrašą su 3 pigiausiomis prekėmis. Pademonstruokite veikimą.
 */

class prekes {
    public $sarasas = [];

    function metodas($pa, $ka, $ki){
        $this->sarasas[] = [
            'pavadinimas' => $pa,
            'kaina' => $ka,
            'kiekis' => $ki
        ];
        usort($this->sarasas, function ($a, $b) {
            if ($a['kaina'] > $b['kaina']) return 1;
            elseif ($a['kaina'] == $b['kaina']) return 0;
            else return -1;
        });
    }

    function pigiausios(){
        $m = [];
        for ($i = 0; $i < min($this->sarasas) && $i < 3; $i++) {
            $m[] = $this->sarasas[$i];
        }
        return $m;
    }
}


$o = new prekes();
$o->metodas('Pienas', 1, 30);
$o->metodas('Sviestas', 2, 35);
$o->metodas('Desra', 5, 18);
$o->metodas('Suris', 3, 22);
$o->metodas('Grietine', 1, 50);

var_dump($o);

var_dump($o->pigiausios());
