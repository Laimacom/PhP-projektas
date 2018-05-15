<?php
$d = date("Y-m-d H:m:s");
echo $d . '<br>';
echo uniqid() . '<br>' ;   //unikalus kodas, priklauso nuo datos ir laiko su  milisekundem

$ad = preg_replace("/^(\d{4})-(\d{2})-(\d{2}) (.+)$/", "$2/$3/$1 $4", $d);
echo $ad;