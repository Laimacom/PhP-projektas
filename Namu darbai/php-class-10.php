<?php
/**
Sukurti klasę naujienos su savybe sąrašas. Sukurti metodą, kurio pagalba būtų galima patalpinti naujieną į sąrašą. Naujieną talpinti asociatyviniu masyvu: data, tekstas (tekstas turi būti vienas sakinys).
 * Sukurti metodą info, kuris: a) surūšiuotų masyvą pagal datą; b) paverstu teksto visus simbolius mažosiomis raidėmis, o pirmąją raidę - dižiąja; c) išvestu visas naujienas lentele.
 */

class naujienos
{
    public $sarasas = [];

    function add($dat, $tek)
    {
        $this->sarasas[] = [
            'data' => $dat,
            'tekstas' => $tek,
        ];
    }
    function info(){

    }
}