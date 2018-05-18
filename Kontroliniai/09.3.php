<?php
/*
Panaudodami prieš tai sukurtą klasę "preke", sukurkite klases "vaikams" ir "studentams", kurios paveldi "preke" klasę. "preke" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “kodas, pavadinimas kaina”. "vaikams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (vaikams)”. vaikams‐ tiesiog paprastas žodis. "studentams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (studentams)”. studentams‐ tiesiog paprastas žodis. "vaikams" ir "studentams" klasių metodas info turi turėti parametrą "nuolaida" (procentais), kurio pagalba būtų perskaičiuojama prekės kaina išvedimo metu. Patkrinkite visų trijų klasių metodo “info” veikimą.
*/
class preke
{
    public $kodas;
    public $pavadinimas;
    public $kaina;

    function __construct($kod, $pav, $kai)
    {
        $this->kodas = $kod;
        $this->pavadinimas = $pav;
        $this->kaina = $kai;
    }

    function getinfo(){
        $s = "%s, %s, %s.";
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina) . '<br>';
    }
}

class vaikams extends preke {
    function info($n){
        $this->kaina = $this->kaina - ($this->kaina * ($n/100));
        $s = "%s, %s, %s (vaikams).";
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina). '<br>';
    }
}
class studentams extends preke {
    function info($n){
        $this->kaina = $this->kaina - ($this->kaina * ($n/100));
        $s = "%s, %s, %s (studentams).";
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina) . '<br>';
    }
}

$o = new preke('836483', 'Kaladeles', '1');
$o->getinfo();
$o = new vaikams('836758', 'Kaladeles', '1');
$o->info(10);
$o = new studentams('836864', 'Skaiciuotuvas', '10');
$o->info(20);