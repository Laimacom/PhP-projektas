<?php
/**
Sukurti klasę, kurioje yra įmonės akcininkų sąrašas. Sukurti metodą, kurio pagalba galima į sąrašą įvesti įmonės akcininkų duomenis: vardas, pavardė, akcijų skaičius. Akcininkų sąrašą surūšiuoti pagal turimų akcijų skaičių mažėjančia tvarka. Sukurti metodą, kuris išvestu akcininikų sąrašą: vardas, pavardė, turimų akcijų kiekis procentais nuo visų akcijų skaičiaus. Pademonstruoti veikimą.
 */

class akcininkai{
    public $akc = [];
    function sarasas($vr, $pv, $ak){
        $this->akc[] = [
            'var' => $vr,
            'pav' => $pv,
            'aksk' => $ak
        ];
        usort($this->akc, function ($a, $b) {
            if ($a['ak'] > $b['ak']) return -1;
            elseif ($a['ak'] < $b['ak']) return 1;
            else 0;
        });
    }
    function info(){
        $sum = 0;
        foreach ($this->akc as $a){
            $sum += $a['ak'];
        }
        echo '<table>';
        foreach ($this->akc as $a){
            echo '<tr>';
            echo '<td>' . $a['vr'] . '</td>';
            echo '<td>' . $a['pv'] . '</td>';
            echo '<td>' . round((($a['ak']) / $sum) * 100, 1) . '%</td>';

        }
    }
}

$o = new akcininkai();
$o->sarasas('Jonas', 'Jonaitis', 200);
$o->sarasas('Zigmas', 'Zigmaitis', 650);
$o->sarasas('Petras', 'Petraitis', 150);
var_dump($o);

$o->info();