<?php
/*
Panaudodami prieš tai sukurtą klasę "miestas", sukurkite klases "didelis" ir "mazas", kurios paveldi "miestas" klasę. "miestas" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, gyventojų skaičius, regionas”. "didelis" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “pavadinimas, gyventojų skaičius, regionas (didelis miestas)”. didelis miestas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/
class miestas
{
    public $pavadinimas;
    public $gyventoju_skaicius;
    public $regionas;

    function __construct($pav, $sk, $reg)
    {
        $this->pavadinimas = $pav;
        $this->gyventoju_skaicius = $sk;
        $this->regionas = $reg;
    }

    function info(){
        $s = "%s, %s, %s.";
        echo sprintf($s, $this->pavadinimas, $this->gyventoju_skaicius, $this->regionas) . '<br>';
    }
}
class didelis extends miestas{
    function info(){
        $s = "%s, %s, %s (didelis miestas).";
        echo sprintf($s, $this->pavadinimas, $this->gyventoju_skaicius, $this->regionas) . '<br>';
    }

}
class mazas extends miestas{

}


$o = new miestas('Vilnius', '800000', 'Aukstaitija');
$o->info();
$o = new didelis('Vilnius', '800000', 'Aukstaitija');
$o->info();
$o = new mazas('Garliava','30000','Suvalkija');
$o->info();
