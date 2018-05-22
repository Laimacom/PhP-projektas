<?php
/**
Panaudodami prieš tai sukurtą klasę universitetas, sukurkite klases standartinis ir technologinis, kurios paveldi universitetas klasę. Universitetas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “Pavadinimas, miestas (studentų skaičius)”. Technologinis klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “Pavadinimas, miestas (studentų skaičius) - technologinis”. technologinis - tiesiog paprastas žodis.
 */

class universitetas
{
    public $pavadinimas;
    public $miestas;
    public $studentu_skaicius;

    function __construct($p, $m, $sk)
    {
        $this->pavadinimas = $p;
        $this->miestas = $m;
        $this->studentu_skaicius = $sk;
    }

    function info (){
        $s  = "%s %s (%s)";
        echo sprintf($s, $this->pavadinimas, $this->miestas, $this->studentu_skaicius) . '<br>';
    }
}
class standartinis extends universitetas {

}
class technologinis extends universitetas {
    function info (){
        $s  = "%s %s (%s) - technologinis";
        echo sprintf($s, $this->pavadinimas, $this->miestas, $this->studentu_skaicius) . '<br>';
    }
}

$o = new universitetas('KTU', 'Kaunas', '7000');
$o->info();
$o = new standartinis('VU', 'Vilnius', '9000');
$o->info();
$o = new technologinis('KTU', 'Kaunas', '7000');
$o->info();

