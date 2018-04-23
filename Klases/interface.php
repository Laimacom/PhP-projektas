<?php
interface x{      //kaip planas, viska reikia sukurt, naudojama sudetingiems projektams
    public function info();
  }
  class a implements x {
    public $s = 'labas';
    function info(){
        echo $this->s;
    }
  }
  $o = new a();
$o->info();