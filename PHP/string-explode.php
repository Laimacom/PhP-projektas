<?php
$s = 'laBas ryTas kaUNas vilnIUS';
$m = explode(' ', $s);
var_dump($m);

//for($i=0; $i<count($m); $i++){
    //$e = $m[$i];
    //$e = strtolower($e);
    //$e = ucfirst($e);
    //$m[$i] = $e;
    //$m[$i] = ucfirst(strtolower($m[$i])); //tas pats tik trumpiau
//}

$m2 = array_map(function($e){     //trecias budas
    return ucfirst(strtolower($e));
}, $m);

$s2 = implode(', ', $m2);
echo $s2;