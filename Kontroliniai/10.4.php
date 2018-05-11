<?php

/**Sukurti klase, su savybe sarasas. Sukurti metoda, kurio pagalba galima butu ideti norima kieki skaiciu (funkcijos parametras turi buti masyvas). Sukurti metoda, kuris grazina didziausia skaiciu is saraso. Sukurti metoda, kuris grazina maziausia skaiciu is saraso. Pademonstruoti veikima.*/

class skaiciai {
    public $sarasas=[];
    function add ($m){
        foreach($m as $sk){
            $this->sarasas[] = $sk;
        }
    }
    function getmin(){
        $min = $this->sarasas[0];
        foreach($this->sarasas as $sk){
            if ($sk < $min) $min = $sk;
        }
        echo $min;
    }
    function getmax(){
        $max = $this->sarasas[0];
        foreach($this->sarasas as $sk){
            if ($sk > $max) $max = $sk;
        }
        echo $max;
    }
}
$o = new skaiciai();
$o->add([3, 4, 8, 1, 5, 16, 22, 0]);
echo 'Maziausias skaicius: ';
$o->getmin();
echo '<br>';
echo 'Didziausias skaicius: ';
$o->getmax();
