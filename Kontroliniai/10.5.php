<?php
/**
Sukurti klasę, su savybe sąrašas. Sukurti metodą, kurio pagalba galima būtų įdėti studento egzaminų rezultatus: vardas, fizika, matematika, programavimas (dšimtbalėje sistemoje). Sukurti metodą, kuris gražina visus egzaminus išlaikiusių studentų sąrašą (egzaminas yra išlaikytas, jeigu rezultatas yra >= 5. Sukurti metodą, kuris gražina egzaminų laikymo vidurkį. Pademonstruoti veikimą.
 */

class studentai
{
    public $sarasas = [];
    function studentas($v, $f, $m, $p)
    {
        $this->sarasas[] = [
            'vardas' => $v,
            'fizika' => $f,
            'matematika' => $m,
            'programavimas' => $p
        ];
    }
    function islaike(){
        $x=[];
        foreach ($this->sarasas as $a) {
            if ($a['fizika']>=5 and
            $a['matematika']>=5 and
            $a['programavimas']>=5)
            $x[] = $a['vardas'];
        }
        return $x;
    }
    function vidurkis(){
        $suma=0;
        $kiekis=0;
        foreach ($this->sarasas as $a) {
            $suma += $a['fizika']+$a['matematika']+$a['programavimas'];
                $kiekis++;
            }
        return $suma / ($kiekis*3);
    }
}

$o = new studentai();
$o->studentas('Jonas', '8', '10', 10);
$o->studentas('Petras', '9', '8', 8);
$o->studentas('Simas', '6', '7', 4);
$o->studentas('Lina', '4', '6', 8);
var_dump($o);

$y = $o->islaike();
var_dump($y);

$z = $o->vidurkis();
echo "Vidurkis: $z";