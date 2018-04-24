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
            'akc' => $ak
        ];
        usort($this->akc, function($a, $b){
            if ($a['akc'] > $b['akc']) return -1;
            elseif ($a['akc'] < $b['akc']) return 1;
            else 0;
        });
    }
    function info(){
        $sum = 0;
        foreach($this->akc as $a){
            $sum += $a['akc'];
        }
        echo '<table>';
        foreach ($this->akc as $a){
            echo '<tr>';
            echo '<td>' . $a['var'] . '</td>';
            echo '<td>' . $a['pav'] . '</td>';
            echo '<td>' . round(($a['akc'] / $sum) * 100, 1) . '%</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}

$o = new akcininkai();
$o->sarasas('Jonas', 'Jonaitis', 200);
$o->sarasas('Zigmas', 'Zigmaitis', 650);
$o->sarasas('Petras', 'Petraitis', 150);
var_dump($o);

$o->info();