<?php
/**
Sukurti html failą su POST forma. Forma turi pateikti teleloto skaičių į backend. Backend php faile atsidaryti sesiją ir joje kaupti skaičius. Sukurti klasę skaičių kaupimui (metodas) ir atvaizdavimui lentele 5x5 (metodas). Backende įdėti nuorodą grįžimui į frontend formą.
 */

session_start();
class loto
{
    function add($n)
    {
        $_SESSION['loto'][] = $n;
    }

    function info()
    {
        echo '<table>';
        for ($i = 0; $i < 5 && $i < ceil(count($_SESSION['loto']) / 5); $i++) {
            echo '<tr>';
            for ($j = 0; $j < 5; $j++) {
                if ($i * 5 + $j >= count($_SESSION['loto'])) break;
                echo '<td>' . $_SESSION['loto'][$i * 5 + $j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}


$o = new loto();
if (isset ($_SESSION['loto']) && count($_SESSION['loto'])>=25){
    echo 'Sarasas pilnas';
}
else {
    $o->add($_POST['kamuoliukas']);
}
$o->info();
 echo '<a href="11.1-frontend.html">Atgal</a>';