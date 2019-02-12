<?php
class zmogus {
    public $vardas;
    public $pavarde;
    public $amzius;

    function __construct($vr, $pv, $pr){
        $this->vardas = $vr;
        $this->pavarde = $pv;
        $this->amzius = $pr;
    }
}

$zmogus1 = new zmogus('Ieva', 'Ievaite', 35);
$zmogus2 = new zmogus('Jonas', 'Jonaitis', 45);
$zmogus3 = new zmogus('Petras', 'Jonaitis', 55);


$sarasas = [$zmogus1, $zmogus2, $zmogus3];

    echo '<table>';
    foreach($sarasas as $a){
        echo'<tr>';
        echo'<td>' . $a->vardas . '</td>';
        echo'<td>' . $a->pavarde . '</td>';
        echo'<td>' . $a->amzius . '</td>';
        echo'</tr>';
    }
    echo '</table>';



