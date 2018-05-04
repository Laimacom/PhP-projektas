<?php
/**
Tekstinio redaktoriaus pagalba sukurti failą su teleloto skaičiais (5 x 5). Parašyto PHP skriptą, kuris nuskaito failą ir išveda ekrane teleloto lentelę (5 x 5).
 */
$x = file_get_contents('php-file-02-lentele.txt');
echo $x;

function info(){
    $x = file_get_contents('php-file-02-lentele.txt');
    echo '<table>';
    for ($i = 0; $i < 5 && $i < ceil(count('$x') / 5); $i++) {
        echo '<tr>';
        for ($j = 0; $j < 5; $j++) {
            if ($i * 5 + $j >= count($_SESSION['loto'])) break;
            echo '<td>' . $_SESSION['loto'][$i * 5 + $j] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
