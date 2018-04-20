<?php
/**
Sukurti klase Sveciai. Klaseje turi buti savybe - sveciu sarasas. Sukurti klases metoda, su kuriuo butu galima papildyti sveciu sarasa. Informacija apie svecia: vardas, lytis, patiekalas, amzius. Sukurti klases metoda sveciu sarasui suformuoti.
*/

class Sveciai {
    public $sar = [];
    function sarasas($v, $l, $p, $a){
        $this->sar[] = [
            'vardas' => $v,
            'lytis' => $l,
            'patiekalas' => $p,
            'amzius' => $a,
        ];
    }
    function getinfo(){
        echo '<table>';
        foreach($this->sar as $dar){
            echo'<tr>';
            echo'<td>' . $dar['vardas'] . '</td>';
            echo'<td>' . $dar['lytis'] . '</td>';
            echo'<td>' . $dar['patiekalas'] . '</td>';
            echo'<td>' . $dar['amzius'] . '</td>';
            echo'</tr>';
        }
        echo '</table>';
    }
}

$s = new Sveciai();
$s->sarasas('Jonas', 'vyras', 'Kepsnys', '32');
$s->sarasas('Ieva', 'moteris', 'Salotos', '31');
$s->sarasas('Petras', 'vyras', 'Kepsnys', '38');
$s->getinfo();