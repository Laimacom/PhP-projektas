<?php
class Mokinys {
    public $vardas;
    public $pavarde;
    public $vidurkis;

    function __construct($vardas, $pavarde, $vidurkis){
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
        $this->vidurkis = $vidurkis;
    }
}
class Dalykas {
    public $pavadinimas;   //tekstas
    public $pazymiai;   //pazymiai masyve [4,5,7,2]

    function __construct($pavadinimas,$pazymiai){
        $this->pavadinimas = $pavadinimas;
        $this->pazymiai =$pazymiai;
    }
    public function vidurkis(){
        return array_sum($this->pazymiai) / count($this->pazymiai);
    }
}
$mokiniai = [
    new Mokinys('Justė','Justaitė', 8.4),
    new Mokinys('Jonas','Jonaitis', 7.8),
    new Mokinys('Petras','Petraitis', 9.4),
    new Mokinys('Ona','Onaitė', 8.2)
];

usort($mokiniai, function($s1, $s2) {
    if ($s1->vidurkis == $s2->vidurkis) {
        return 0;
    } else if ($s1->vidurkis < $s2->vidurkis) {
        return 1;
    } else {
        return -1;
   }
});

echo '<table border="1">';
echo'<tr>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Vidurkis</th>
      </tr>
';
foreach($mokiniai as $a){
    echo'<tr>';
    echo'<td>' . $a->vardas . '</td>';
    echo'<td>' . $a->pavarde . '</td>';
    echo'<td>' . $a->vidurkis . '</td>';
    echo'</tr>';
}
echo '</table>';