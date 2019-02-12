<?php
$n = [
    [3,4,6,4],
    [5,6,2,1],
    [1,4,7,5],
];

echo '<table>';
for ($i = 0; $i<count($n); $i++){
    echo '<tr>';
    for ($j = 0; $j < count($n[$i]); $j++) {
        echo '<td>' . $n[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<br>';

$sum = [];
for ($i = 0; $i < count($n); $i++){      //suka tiek kartu, kiek yra eiluciu
  //panaudoti isset
    for ($j = 0; $j < count($n[$i]); $j++) {
        $sum[$j] += $n[$i][$j];
    }
}

for ($i = 0; $i < count($sum); $i++){
    echo $sum[$i] . " ";
}

