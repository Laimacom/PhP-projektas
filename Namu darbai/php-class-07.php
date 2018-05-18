<?php
/**
Sukurkite klasę klasę asmuo su savybėmis: vardas, pavarde, amžius (reikšmės suteikiamos konstruktoriaus pagalba). Sukurkite klases: darbuotojas ir studentas, kurios paveldi klasę asmuo. Klasė asmuo turi metodą info, kuris išveda teksto eilutę: "Vardas, pavardė, amčius" (duomenis įstatyti iš savybių). Darbuotojas turi papildomas savybes: pareigos, atlyginimas. Studentas turti papildomą savybę: specialybė. Darbuotojo atveju metodas info turi išvesti tekstą: "Darbuotojas: vardas, pavardė, amžius, pareigos, atlyginimas" (reikšmes įstatyti iš savybių). Studento atveju metodas info turi išvesti tekstą: "Studentas: vardas, pavardė, amžius, specialybė" (reikšmes įstatyti iš savybių).
 */

class asmuo {
    public $var;
    public $pav;
    public $amz;

    function __construct($vr, $pv, $am)
    {
        $this->var = $vr;
        $this->pav = $pv;
        $this->amz = $am;
    }
    function getinfo (){
        $s  = "%s, %s, %s";
        echo sprintf($s, $this->var, $this->pav, $this->amz) . '<br>';
    }
}

class darbuotojas extends asmuo {
    function info ($par, $atl){
        $s  = "Darbuotojas: %s, %s, %s, %s, %s.";
        echo sprintf($s, $this->var, $this->pav, $this->amz, $par, $atl) . '<br>';
    }
}
class studentas extends asmuo {
    function info ($spec){
        $s  = "Studentas: %s, %s, %s, %s.";
        echo sprintf($s, $this->var, $this->pav, $this->amz, $spec) . '<br>';
    }
}


$o = new asmuo('Zigmas', 'Zigmaitis', 30);
$o->getinfo();
$o = new darbuotojas('Jonas', 'Jonaitis', 30);
$o->info('direktorius', 2000);
$o = new studentas('Petras', 'Petraitis', 22);
$o->info('ekonomika');
