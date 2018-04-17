<?php

class imone {
    public $pav;
    public $kodas;
    private $sar = [];
    function __construct($p, $k){
        $this->pav = $p;
        $this->kodas = $k;
    }
    function darb($vr, $pv, $pr){
        $this->sar[] = [
            'var' => $vr,
            'pav' => $pv,
            'par' => $pr
        ];
    }
    function getinfo(){
        echo $this->pav . ' (' . $this->kodas . ')<br>';
        echo '<table>';
        foreach($this->sar as $dar){
            echo'<tr>';
            echo'<td>' . $dar['var'] . '</td>';
            echo'<td>' . $dar['pav'] . '</td>';
            echo'<td>' . $dar['par'] . '</td>';
            echo'</tr>';
        }
        echo '</table>';
    }
}

$o = new imone('CodeAcademy', 1234563);
$o->darb('Jonas', 'Jonaitis', 'direktorius');
$o->darb('Petras', 'Petraitis', 'vadybininkas');
$o->darb('Antanas', 'Antanaitis', 'darbininkas');
$o->getinfo();
//var_dump($o->sar);   //neisveda,nes private
echo $o->pav;
