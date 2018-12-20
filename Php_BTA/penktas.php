<?php
$n = [
    [1,4,23,56,34],
    [33,47,27,78,46],
    [11,24,45,69,33],
    [23,22,33,44,55],
    [77,88,99,26,8]
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

$sum=[];

for ($i = 0; $i < count($n); $i++){
    $sum[$i] = 0;
    for ($j = 0; $j < count($n[0]); $j++) {
        $sum[$i] += $n[$j][$i];
    }
}
for ($i = 0; $i < count($n); $i++){
    echo $sum[$i] . " ";
}
