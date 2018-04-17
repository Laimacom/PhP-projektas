<?php
$s = "labas rytas";

echo strstr($s, 'bas') . '<br>';
echo strpos($s, 'rytas') . '<br>'; //isveda nuo kurios pozicijos prasideda 'rytas'

$string = "This is\tan example\nstring";
echo $string . '<br>';
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, " \n\t");

while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}

$s = " labas ";
echo "'" . trim($s) . "'" . '<br>'; //nutrina tarpus
echo "'" . ltrim($s) . "'" . '<br>';
echo "'" . rtrim($s) . "'" . '<br>';

$x = "Ąžuolas";
echo strlen($x) . '<br>';//netinka lietuviskom raidem, nes jos koduojamos dviem baitais
echo mb_strlen($x, 'utf-8') . '<br>';
