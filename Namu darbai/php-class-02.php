<?php
/**
Sukurti klasę "imone" su savybėmis: "pavadinimas", "adresas", "telefonas", "pastas", "darbuotojai". Sukurti konstruktorių, kuris patalpina duomenis į savybes "pavadinimas", "adresas", "telefonas", "pastas". Sukurti metodą, kuris patalpina į savybę "darbuotojai" (sąrašą) darbuotojo duomenis: "vardas", "pavarde", "pareigos", "atlyginimas". Sukurti metodą, kuris išveda informaciją apie įmonę: pavadinimas, adresas, telefonas. el. paštas, darbuotojų skaičius. Sukurti metodą, kuris išveda darbuotojų sąrašą. Pademonstruoti veikimą.
 */

class imone{
    public $pav;
    public $adr;
    public $tel;
    public $past;
    private $darb = [];
    function __construct($pv, $ad, $tl, $ps){
        $this->pav = $pv;
        $this->adr = $ad;
        $this->tel = $tl;
        $this->past = $ps;
    }

    function sarasas($vr, $pv, $pr, $atl){
        $this->darb[] = [
            'var' => $vr,
            'pav' => $pv,
            'par' => $pr,
            'atl' => $atl
        ];
    }

    function getinfo(){

        echo $this->pav . ', ' . $this->adr . ', ' . $this->tel . ', ' . $this->past . '<br>'. 'Darbuotoju skaicius: ' . count($this->darb) . '<br>';

        echo '<table>';
        foreach($this->darb as $dar){
            echo'<tr>';
            echo'<td>' . $dar['var'] . '</td>';
            echo'<td>' . $dar['pav'] . '</td>';
            echo'<td>' . $dar['par'] . '</td>';
            echo'<td>' . $dar['atl'] . '</td>';
            echo'</tr>';
        }
        echo '</table>';
    }
}

$o = new imone('UAB Elinda', 'Alyvų g. 29, Garliava', '8 674 45475', 'uabelinda@gmail.com');
$o->sarasas('Jonas', 'Jonaitis', 'direktorius', 2000);
$o->sarasas('Petras', 'Petraitis', 'vadybininkas', 1500);
$o->sarasas('Antanas', 'Antanaitis', 'darbininkas', 1000);
$o->sarasas('Zigmas', 'Zigmaitis', 'darbininkas', 1000);
$o->getinfo();
