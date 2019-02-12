<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$n = [
    [1,3,4],
    [2,5],
    [2=>3,5=>8],
    [1,1,5=>1],
];

$stulpeliai = stulpeliai($n);

$sumos = [];
foreach ($n as $eilute) {
    foreach ($eilute as $stulpelis => $sk) {
        if (!isset($sumos[$stulpelis])) $sumos[$stulpelis] = 0;
        $sumos[$stulpelis] += $sk;
    }
}
echo '<table border="1">';
    echo '<tr>';
    for($i = 0; $i < $stulpeliai; $i++){
        echo '<th>';
            echo $i + 1;
        echo '</th>';
    }
    echo '</tr>';
    for ($eilute = 0; $eilute < count($n); $eilute++){
    echo '<tr>';
        for ($stulpelis = 0; $stulpelis < $stulpeliai; $stulpelis++){
            echo '<td>';
            if (!isset($n[$eilute][$stulpelis])) $n[$eilute][$stulpelis] = 0;
                echo $n[$eilute][$stulpelis];
            echo '</td>';
        }
    echo '</tr>';
    }
    echo '<tr>';
    for ($stulpelis = 0; $stulpelis < $stulpeliai; $stulpelis++){
        echo '<th>';
            if (!isset($sumos[$stulpelis])) $sumos[$stulpelis] = 0;
            echo $sumos[$stulpelis];
        echo '</th>';
    }
    echo '</tr>';
echo '</table>';

function stulpeliai($n) {
    $max = -1;
    foreach ($n as $reiksme) {
        $maxkey = max(array_keys($reiksme));
        if ($maxkey > $max) $max = $maxkey;
    }
    return $max + 1;
}
?>
</body>
</html>
