<?php
/*Sukurti CodeAcademy klase, kurioje yra savybe - kursu masyvas. Sukurti funkcija, kuri papildytu ta masyva asociatyviniu kurso masyvu, kurio raktai: data, kiekis, kurso pavadinimas. Sukurti funkcija, kuri isvestu informacija apie kursu lentele.*/

class CodeAcademy {
    public $sav = [];
    function am($d, $k, $p){
        $this->sav[] = [
            'data' => $d,
            'kiekis' => $k,
            'pavadinimas' => $p
        ];
    }
    function getinfo(){
        echo '<table>';
        foreach($this->sav as $dar){
            echo'<tr>';
            echo'<td>' . $dar['data'] . '</td>';
            echo'<td>' . $dar['kiekis'] . '</td>';
            echo'<td>' . $dar['pavadinimas'] . '</td>';
            echo'</tr>';
        }
        echo '</table>';
    }
}

$kursai = new CodeAcademy();
$kursai->am('2018-03-04', '10', 'PHP');
$kursai->am('2018-04-05', '15', 'HTML');
$kursai->am('2018-05-08', '8', 'CSS');
$kursai->getinfo();

