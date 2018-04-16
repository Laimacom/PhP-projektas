<?php
/**
Sukurkite skaičių masyvą. Suraskite visus visus nelyginius skaičius ir juos pašalinkite iš masyvo. Pademostruokite rezultatą.
 */

$m = [1, 2, 3, 4, 5];

/*foreach ($m as $sk) {   ismeta visus lyginius
    if ($sk % 2 !=0){
        unset($m[$sk]);
    }
}
var_dump($m);*/

foreach ($m as $key => $sk) {  //ismeta visus nelyginius
    if ($sk % 2 !=0){
        unset($m[$key]);
    }
}
var_dump($m);
