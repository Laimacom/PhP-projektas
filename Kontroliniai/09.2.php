<?php
/*
Panaudodami prieš tai sukurtą klasę codeAcademy, sukurkite klases backend ir frontend, kurios paveldi codeAcademy klasę. codeAcademy klasę papildykite metodu “kursas”, kuris išvestų suformatuotą eilutę “data, skaicius, auditorija”. backend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (backend kursas)”. backend kursas ‐ tiesiog paprastas žodis. frontend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (frontend kursas)”. frontend kursas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “kursas” veikimą.
*/
class codeAcademy {
    public $dat;
    public $skai;
    public $aud;
    function __construct($dt, $sk, $au){
        $this->dat = $dt;
        $this->skai = $sk;
        $this->aud = $au;
    }
    function kursas(){
        $s  = "%s, %s, %s";
        echo sprintf($s, $this->dat, $this->skai, $this->aud) . '<br>';
    }
}
class backend extends codeAcademy{
    function kursas(){
        $s = "%s, %s, %s (backend kursas)";
        echo sprintf($s, $this->dat, $this->skai, $this->aud) . '<br>';
    }
}
class frontend extends codeAcademy {
    function kursas(){
        $s = "%s, %s, %s (frontend kursas)";
        echo sprintf($s, $this->dat, $this->skai, $this->aud) . '<br>';
    }
}
$o = new codeAcademy('2018-03-26', '16', '302');
$o->kursas();
$o = new backend('2018-04-12', '14', '304');
$o->kursas();
$o = new backend('2018-05-09', '10', '301');
$o->kursas();
