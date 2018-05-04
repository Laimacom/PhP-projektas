<?php

error_reporting(E_ALL);    //kad rodytu visas klaidas
ini_set('display_errors', '1');   //kad rodytu visas klaidas

try {
    $cnn = new PDO('mysql:host=localhost;dbname=Laimacom', 'Laimacom', 'Laimacom123');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $res = $cnn->query("select aut_gamintojas as g, aut_modelis as m, aut_metai as mm, aut_kaina as k from aut order by aut_kaina");

    while ($row = $res->fetch()) {
        echo $row['g'] . ' ' . $row['m'] . ' ' . $row['mm'] . ' ' . $row['k'] . '<br>';
    }
}
catch (PDOException $e){
    echo $e->getMessage();
}