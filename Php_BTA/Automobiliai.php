<?php

require_once 'Radaras.php';
use miestas\gatve\Radaras;

$data = [
    new Radaras('2018-12-25 14:15:14', 'ABT 117', 1700, 80),
    new Radaras('2018-11-14 10:11:13', 'GBT 065', 1200, 30),
    new Radaras('2018-12-16 13:10:56', 'GKL 007', 1600, 65),
    new Radaras('2018-10-30 12:11:39', 'KET 487', 2000, 100),
];

usort($data, function(Radaras $s1, Radaras $s2) {
    if ($s1->greitis() == $s2->greitis()) {
        return 0;
    } else if ($s1->greitis() < $s2->greitis()) {
        return 1;
    } else {
        return -1;
    }
});

echo '<table border="1">';
echo'<tr>
        <th>Data</th>
        <th>Vardas</th>
        <th>Atstumas</th>
        <th>Laikas</th>
        <th>Greitis</th>
      </tr>
';
foreach($data as $a){
    echo'<tr>';
    echo'<td>' . $a->date . '</td>';
    echo'<td>' . $a->name . '</td>';
    echo'<td>' . $a->distance . '</td>';
    echo'<td>' . $a->time . '</td>';
    echo'<td>' . $a->greitis() . '</td>';
    echo'</tr>';
}
echo '</table>';