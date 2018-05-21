<?php
/**
Sukurti klasę naujienos su savybe sąrašas. Sukurti metodą, kurio pagalba būtų galima patalpinti naujieną į sąrašą. Naujieną talpinti asociatyviniu masyvu: data, tekstas (tekstas turi būti vienas sakinys).
 * Sukurti metodą info, kuris: a) surūšiuotų masyvą pagal datą; b) paverstu teksto visus simbolius mažosiomis raidėmis, o pirmąją raidę - dižiąja; c) išvestu visas naujienas lentele
 */

class naujienos
{
    public $sarasas = [];

    function add($dat, $tek)
    {
        $this->sarasas[] = [
            'data' => $dat,
            'tekstas' => $tek
        ];
    }
    function info(){
        usort($this->sarasas, function($a, $b){
            if ($a['data'] > $b['data']) return 1;
            elseif ($a['data'] == $b['data']) return 0;
            else return -1;
        });
       /* $i = 0;
        foreach($this->sarasas as $o){
            $this->sarasas[$i]['tekstas'] = ucfirst(strtolower($this->sarasas[$i]['tekstas'] ));
            $i++;
        }*/
       for ($i=0; $i<count ($this->sarasas); $i++){        //tas pats su for
           $this->sarasas[$i]['tekstas'] = ucfirst(strtolower($this->sarasas[$i]['tekstas'] ));
       }
        echo '<table>';
        foreach ($this->sarasas as $a){
            echo '<tr>';
            echo '<td>' . $a['data'] . '</td>';
            echo '<td>' . $a['tekstas'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}

$o = new naujienos();
$o->add('2018-05-21', 'kaune atsirado naujas investuotas');
$o->add('2018-05-18', 'siandien Lis LIETUS');
$o->add('2018-04-19', 'darbus pradesime veliau');
var_dump($o);

$o->info();