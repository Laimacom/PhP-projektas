<?php
/**
Sukurti klasę su savybe skaičiai (masyvas). Sukurti metodą, kurio pagalba būtų galima papildyti skaičių masyvą nustatytų kiekiu atsitiktiniu skaičių. Atsitiktiniai skaičiai turi būti generuojami pagal nustatytas ribas nuo iki (metodo parametrai: kiek atsitiktinių skaičių, ribos pradžia ir ribos pabaiga). Sukurti metodą, kuris gražina surūšiuotą sąrašą skaičių, kurie yra nelyginiai. Pademonstruoti veikimą.
 */

class klase
{
    public $skaiciai = [];
    function add($kiek, $min, $max)
    {
        //for ($i = 0; $i < $kiek; $i++)      //antras budas
        //$this->skaiciai[] = rand($min, $max);

        $i = 0;
        while ($i < $kiek) {
            $this->skaiciai[] = rand($min, $max);
            $i++;
        }
    }

    function surusiuoti()
    {
        $m = [];
        foreach ($this->skaiciai as $sk) {  //ismeta visus nelyginius
            if ($sk % 2 != 0)
                $m [] = $sk;
            }
            sort($m);
            return $m;
        }

}


$o = new klase();
$o->add(8, 3, 16);
var_dump($o);
$m = $o->surusiuoti();
var_dump($m);
