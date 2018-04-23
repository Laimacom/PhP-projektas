<?php

class a {
   static function y(){
       return 'labas<br>';
   }
    static function f(){  //viena statine funkcija kvieciasi kita
        //echo a::y();
        echo self::y();  //klases viduje galima kviesti vietoj pavadinimo self
    }
}

a::f();