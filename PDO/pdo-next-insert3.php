<?php

error_reporting(E_ALL);    //kad rodytu visas klaidas
ini_set('display_errors', '1');   //kad rodytu visas klaidas

try {  //sitas blokas reikalingas, kad butu pagaunamos visos klaidos
    $cnn = new PDO('mysql:host=localhost;dbname=Laimacom', 'Laimacom', 'Laimacom123');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //tam, kad veikty try blokas

    $res = $cnn->prepare("insert into aut (aut_gamintojas, aut_modelis, aut_metai, aut_kaina) values(?, ?, ?, ?)");
    $res = $res->execute(['Skoda','Octavia','2010-01-01', 5000]);
        echo 'ok';
}
catch (PDOException $e){     //irgi prie klaidu gaudymo
    echo $e->getMessage();
}