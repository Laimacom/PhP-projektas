<?php

error_reporting(E_ALL);    //kad rodytu visas klaidas
ini_set('display_errors', '1');   //kad rodytu visas klaidas

try {  //sitas blokas reikalingas, kad butu pagaunamos visos klaidos
    $cnn = new PDO('mysql:host=localhost;dbname=Laimacom', 'Laimacom', 'Laimacom123');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //tam, kad veikty try blokas

    $res = $cnn->prepare("update aut set aut_metai=:met, aut_modelis=:mod where aut_id=:id");
    $res = $res->execute([':mod'=>'Fabia', ':met'=>'2010', ':id'=>9]);
        echo 'ok';
}
catch (PDOException $e){     //irgi prie klaidu gaudymo
    echo $e->getMessage();
}