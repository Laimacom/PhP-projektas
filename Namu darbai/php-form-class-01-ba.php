<?php
/**
Sukurti POST formą, kuri leistų įvesti svečio duomenis: vardas, pavardė, pasirinkti patiekalą. Sukurti formos PHP backend, kuri priimtų formos duomenis ir juos išvestų ekrane. Įdėti nuorodą į formą, kad būtų galima grįžti ir įvesti naują svečią. Backend suprogramuoti naudojant class.
 */

session_start();
class preforma
{
    function add()
    {
        $_SESSION['sarasas'][] = $_POST;
    }
}
class forma extends preforma{
    function info(){
        echo '<table>';
        foreach ($_SESSION['sarasas'] as $x) {
            echo '<tr>';
            echo '<td>' . $x['vardas'] . '</td>';
            echo '<td>' . $x['pavarde'] . '</td>';
            echo '<td>' . $x['patiekalas'] . '</td>';
            echo '</td>';
        }
        echo '</table>';

    }
}

$o = new forma();
$o->add();
$o->info();

echo '<a href="php-form-class-01-fr.html">Atgal</a>';