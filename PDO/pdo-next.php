<?php

error_reporting(E_ALL);    //kad rodytu visas klaidas
ini_set('display_errors', '1');   //kad rodytu visas klaidas

try {  //sitas blokas reikalingas, kad butu pagaunamos visos klaidos
    $cnn = new PDO('mysql:host=localhost;dbname=Laimacom', 'Laimacom', 'Laimacom123');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //tam, kad veikty try blokas
    $res = $cnn->query("select aut_gamintojas as g, aut_modelis as m, aut_metai as mm, aut_kaina as k from aut order by aut_kaina");

    while ($row = $res->fetch()) {   //metodas paima duomenis is vienos eilutes
        echo $row['g'] . ' ' . $row['m'] . ' ' . $row['mm'] . ' ' . $row['k'] . '<br>';
    }
}
catch (PDOException $e){     //irgi prie klaidu gaudymo
    echo $e->getMessage();
}