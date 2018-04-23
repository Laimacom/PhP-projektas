<?php

abstract class a{
    abstract function f();
}

//$o = new a(); negalima

class b extends a{
    function f(){
        echo 'ok';
    }
}
$o = new b();
$o->f();