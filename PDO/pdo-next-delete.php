<?php

error_reporting(E_ALL);    //kad rodytu visas klaidas
ini_set('display_errors', '1'); //kad rodytu visas klaidas

try {  //sitas blokas reikalingas, kad butu pagaunamos visos klaidos
    $cnn = new PDO('mysql:host=localhost;dbname=Laimacom', 'Laimacom', 'Laimacom123');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //tam, kad veiktu try blokas

    $res = $cnn->query("delete from aut where aut_id=6");
        echo 'ok';
}
catch (PDOException $e){     //irgi prie klaidu gaudymo
    echo $e->getMessage();
}