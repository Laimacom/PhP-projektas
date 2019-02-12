<?php
namespace miestas\gatve;

class Radaras
{
    public $date;
    public $name;
    public $distance;
    public $time;

    function __construct($date, $name, $distance, $time){
        $this->date = $date;
        $this->name = $name;
        $this->distance = $distance;
        $this->time = $time;
    }
    function greitis(){
        $speed = round($this->distance/$this->time*3.6,1);
        return $speed;
    }
}