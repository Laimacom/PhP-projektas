<?php

echo http_response_code(521) . '<br>';

function getNo(){
    static $n = 0; //pirma karta priskiriamas 0, o kitus kartus ignoruojama
    $n++;
    return $n; //be return funkcija nieko negrazina
}

echo getNo() . '<br>';
echo getNo() . '<br>';
echo getNo() . '<br>';
echo getNo() . '<br>';
echo getNo() . '<br>';

echo 'labas';

