<?php
/**
Panaudodami prieš tai sukurtą klasę dviratis, sukurkite klases moteriskas ir vyriškas, kurios paveldi dviratis klasę. Dviratis klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “Gamintojas modelis (kaina)”. Moteriškas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “Gamintojas modelis - moteriškas”. moteriškas - tiesiog paprastas žodis.
 */

class dviratis
{
    public $gamintojas;
    public $modelis;
    public $kaina;

    function __construct($g, $m, $k)
    {
        $this->gamintojas = $g;
        $this->modelis = $m;
        $this->kaina = $k;
    }
    function info (){
        $s  = "%s %s (%s)";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->kaina) . '<br>';
    }
}
class moteriskas extends dviratis {
    function info (){
        $s  = "%s %s - moteriškas";
        echo sprintf($s, $this->gamintojas, $this->modelis) . '<br>';
    }
}
class vyriskas extends dviratis {

}

$o = new dviratis('Unibike', 'XPJ', '800');
var_dump($o);
$o->info();
$o = new moteriskas('Unibike', 'XTT', '780');
$o->info();

