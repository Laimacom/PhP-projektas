<?php
/**
Sukurti klase, kuri turi savybe - skaiciu sarasas. Sukurti metoda, kuris sugeneruotu atsitiktini skaiciu intervale nuo 1 iki 100 ir patalpintu i sarasa, o po to surusiuotu sarasa. Sukurti metoda, kuris grazina sugeneruotu skaiciu aritmetini vidurki. Sukurti metoda, kuris isveda is masyvo elementus tekstu, kur masyvo elementai atskirti kableliais. Pademonstruoti veikima.
 */

class Skaiciai {
    public $sar = [];
    function sarasas(){
        $this->sar[] = rand(1, 100);
        sort ($this->sar);
    }
    function getinfo(){
        $suma = 0;
        foreach($this->sar as $sk) {
            $suma += $sk;
        }
        return $suma / count($this->sar);
    }
    function text(){
        echo implode(",",$this->sar);  // si funkcija isveda masyvo sarasa, kur glue yra skyrybos zenklas
    }
}

$sk = new Skaiciai();
$sk->sarasas();    //idedam skaiciu
$sk->sarasas();
$sk->sarasas();
$sk->sarasas();
$sk->sarasas();
$sk->sarasas();

echo $sk->getinfo() . '<br>';  // isveda vidurki

$sk->text();  //parodo eilute skaiciu


