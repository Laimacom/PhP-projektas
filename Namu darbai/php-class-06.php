<?php
/**
Sukurkite klasę su prekių sąrašu. Sukurkite metodą, kurio pagalba galima patalpintį į sąrašą duomenis apie prekes: pavadinimas, kaina, kiekis. Sukurkite metodą, kuris gražina prekių sąrašą su 3 pigiausiomis prekėmis. Pademonstruokite veikimą.
 */

class prekes{
    public $sarasas = [];
    function metodas($pa, $ka, $ki){
        $this->sarasas[] = [
            'pavadinimas' => $pa,
            'kaina' => $ka,
            'kiekis' => $ki
        ];
    }
    function pigiausios(){
        usort($this->sarasas, function($a, $b){
            if ($a['kaina'] > $b['kaina']) return 1;
            elseif ($a['kaina'] == $b['kaina']) return 0;
            else return -1;
        });
        echo '<table>';
        foreach ($this->sarasas as $a){
        //for($i=3; $i<min($this->sarasas); $i++){
            echo '<tr>';
            echo '<td>' . $a['pavadinimas'] . '</td>';
            echo '<td>' . $a['kaina'] . '</td>';
            echo '<td>' . $a['kiekis'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';

        }
}

$o = new prekes();
$o->metodas('Pienas', '1', '30');
$o->metodas('Sviestas', '2', '35');
$o->metodas('Desra', '5', '18');
$o->metodas('Suris', '3', '22');
$o->metodas('Grietine', '1', '50');

var_dump($o);

$o->pigiausios();
