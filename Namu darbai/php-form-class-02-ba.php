<?php
/**
Sukurti GET formą, kuri leistų įvesti automobilio duomenis: gamintojas, modelis, kuro rūšis (iš sąrašo), daužta/nedaužta (radio), metai, kaina. Sukurti formos backend, kuris priimtų formos duomenis ir įrašytų į masyvą, kuris yra sesijoje. Išvesti visus sesijoje esančio masyvo duomenis apie automobilius lentele. Įdėti nuorodą į formą, kad būtų galima grižti ir įvesti naują automobilį. Backend suprogramuoti naudojant class.
 */

session_start();
class preforma
{
    function add()
    {
        $_SESSION['sarasas'][] = $_GET;
    }
}
class forma extends preforma{
    function info(){
        echo '<table>';
        foreach ($_SESSION['sarasas'] as $x) {
            echo '<tr>';
            echo '<td>' . $x['gamintojas'] . '</td>';
            echo '<td>' . $x['modelis'] . '</td>';
            echo '<td>' . $x['kuras'] . '</td>';
            echo '<td>' . $x['bukle'] . '</td>';
            echo '<td>' . $x['metai'] . '</td>';
            echo '<td>' . $x['kaina'] . '</td>';
            echo '</td>';
        }
        echo '</table>';

    }
}

$o = new forma();
$o->add();
$o->info();

echo '<a href="php-form-class-02-fr.html">Atgal</a>';

