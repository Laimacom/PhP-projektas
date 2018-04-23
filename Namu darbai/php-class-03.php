<?php
/**
Sukurti klasę darbuotojai, kurioje yra savybė skirta darbuotojų sąrašui saugoti. Sukurti metodą, kurio pagalba galima patalpinti darbuotojo duomenis į sąrašą: asmens kodas, pavarde ir vardas, pareigos, atlyginimas. Sukurti metodą, kurio pagalba galima būtų pašalinti darbuotojo duomenis iš sąrašo pagal asmens kodą. Pademonstruoti veikimą.
 */

class darbuotojai{
    private $darb = [];
    function sarasas($ak, $pv, $pr, $at){
        $this->darb[$ak] = [     //irasyti pagal ka bus pasalinta $ak
            'asmk' => $ak,
            'pavvard' => $pv,
            'par' => $pr,
            'atl' => $at
        ];
    }

    function pasalinti($ak){
        unset($this->darb[$ak]);
        }
}

$o = new darbuotojai();
$o->sarasas('38605257596', 'Petraitis Petras', 'vadybininkas', 1500);
$o->sarasas('38409240902', 'Antanaitis Antanas', 'darbininkas', 1000);
$o->sarasas('38112120987', 'Zigmaitis Zigmas', 'darbininkas', 1000);
var_dump($o);

$o->pasalinti('38409240902');
var_dump($o);
