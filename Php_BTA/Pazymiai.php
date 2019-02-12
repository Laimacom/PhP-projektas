<?php
$mokiniai = [
    ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' => [6, 7, 8], 'matematika' => [3, 5, 4]],],
    ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10,9,10], 'anglu' => [9,8,10], 'matematika' => [10,10,9,9]],],
    ['vardas' => 'Ieva', 'pazymiai' => ['lietuviu' => [10,10,10], 'anglu' => [9,10,10], 'matematika' => [10,10,10,9]],],
    ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' => [6, 7, 8], 'matematika' => [3, 5, 4]],],

];

$mokinioPazymiai = [];
foreach($mokiniai as $mokinys){
    foreach($mokinys['pazymiai'] as $pamoka) {
        foreach ($pamoka as $visiPazymiai) {
            $mokinioPazymiai[$mokinys['vardas']][] = $visiPazymiai;
        }
    }
}
echo "<pre>";
var_dump($mokinioPazymiai);
echo "</pre>";

echo "<br>";
$max = 0;
foreach($mokinioPazymiai as $vardas => $pazymiai){
    $vidurkis = array_sum($pazymiai)/count($pazymiai);
    if($vidurkis > $max){
        $max = $vidurkis;
        $geriausias = $vardas;
    }
}
echo 'Geriausiai mokosi ' . $geriausias . " (vidurkis " . $max . ")";