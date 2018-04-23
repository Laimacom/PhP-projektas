<?php
class a {
    //public static $id = 0;    //jeigu kintamasis ne static, tai kiekviena karta butu 1
    public $id = 0;
    //function __construct(){
    function a(){    //konstruktorius, kai klases pavadinimas sutampa su funkcijos pavadinimu
        //self::$id++;
        $this->id++;
    }
    function getID(){
        //echo self::$id . '<br>';
        echo $this->id . '<br>';
    }
}

$o = new a();
$o->getID();
$o = new a();
$o->getID();
$o = new a();
$o->getID();