<?php
class a{
    protected $title = 'abc';
    /*final*/ function f(){             //neleidzia perrasyti,paveldeti
        echo $this->title . '<br>';
    }
}

$o = new a();
$o->f();

class b extends a{
    function f(){
        echo $this->title . ' (perrasytas)<br>';
    }
    function g(){
        echo 'labas<br>';
    }
    function h(){
        parent::f();   //pakviecia perrasyta funkcija is aukstesnio lygio
    }
}

$o = new b();
$o->f();
$o->g();
$o->h();

