<?php
/*
Padaryti klasę automobiliai. Sukurti funkciją automobilis. Parametrai: a) gamintojas, b) modelis, c) kuras: benzinas, dyzelis, d) kuro sąnaudos (kiek litrų / 100km). Funkcija turi patalpinti automobilio duomenis kaip asociatyvinį masyvą į klasės savybę sąrašas (paprastas masyvas). Sukurti funkciją kurovidurkisDyzelis kuri gražina dyzelinių masinų kuro sanaudų vidurkį. Sukurti funkcija kurovidurkisBenzinas kuri gražina benzininių masinų kuro sąnaudų vidurkį.
*/
class automobiliai{
    public $sarasas = [];
    function automobilis($gm, $md, $ku, $sa){
        $this->sarasas[] = [
            'gamintojas' => $gm,
            'modelis' => $md,
            'kuras' => $ku,
            'sanaudos' => $sa
        ];
    }
    function kurovidurkisDyzelis(){
        $suma = 0;
        $kiekis = 0;
        foreach ($this->sarasas as $a) {
            if ($a['kuras'] == 'Dyzelis') {
                $suma += $a['sanaudos'];
                $kiekis++;
            }
        }
        return $suma / $kiekis;
    }
    function kurovidurkisBenzinas(){
        $suma = 0;
        $kiekis = 0;
        foreach ($this->sarasas as $a) {
            if ($a['kuras'] == 'Benzinas') {
                $suma += $a['sanaudos'];
                $kiekis++;
            }
        }
        return $suma / $kiekis;
    }
}

$o = new automobiliai();
$o->automobilis('VW', 'Sharan', 'Dyzelis', 10);
$o->automobilis('VW', 'Passat', 'Dyzelis', 8);
$o->automobilis('VW', 'Golf', 'Benzinas', 5);
$o->automobilis('Seat', 'Ibiza', 'Benzinas', 7);

var_dump($o);

echo 'Dyzeliniu automobiliu kuro sanaudos yra: ' . $o->kurovidurkisDyzelis();
echo '<br>';
echo 'Benzininiu automobiliu kuro sanaudos yra: ' . $o->kurovidurkisBenzinas();