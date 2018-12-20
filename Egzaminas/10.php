<?php
/**
SSukurkite    PHP     skriptą,    kuriame    aprašykime     klasę    numberList,    kurioje    būtų     viena     savybė     ‐  $numbers,    kuri    bus    masyvas,     taip     pat    būtų    metodas    add($number),     kuris     prideda     naują     skaičių     į  masyvą     sąvybę    $numbers.    Taip     pat     sukurkite     metodą    average(),    kuris     grąžintų     masyve     sąvybėje  esančių     elementų     matemanį     vidurkį.
 */


class numberList {
    public $numbers = [];
    function add ($number){
        $this->numbers[] = $number;
    }
    function average(){
        $n = 0;
        foreach ($this->numbers as $sk){
            $n += $sk;
        }
        return $n /count($this->numbers);
    }
}

$o = new numberList();
$o-> add(50);
$o-> add(20);
$o-> add(20);
$o-> add(10);
echo $o->average();