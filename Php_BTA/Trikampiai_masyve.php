<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$n = [
    [3,4,5],
    [2,10,8],
    [5,6,5],
    [5,5,5],
];
//trikampio krastines a, b, c
$a = 0;
$b = 0;
$c = 0;
$plotas = 0;
$pusperimetris = 0;
for ($i = 0; $i < count($n); $i++){
    for ($j = 0; $j < count($n[0]); $j++) {
        $a = $n[$i][0];
        $b = $n[$i][1];
        $c = $n[$i][2];
    }
    if ($a+$b > $c && $a+$c > $b && $b+$c > $a){
        echo "Skaiciai $a, $b, $c gali buti trikampio krastines. ";
        $pusperimetris = ($a+$b+$c)/2;
        $plotas = sqrt($pusperimetris*($pusperimetris-$a)*($pusperimetris-$b)*($pusperimetris-$c));
        echo "Jo plotas " . $plotas . ". ";
        if ($a==$b && $b==$c){
            echo "Trikampis lygiakrastis.";
        } elseif ($a==$b || $a==$c || $b==$c){
            echo "Trikampis lygiasonis.";
        } else {
            echo "Trikampis ivairiakrastis.";
        }
    } else{
        echo "Skaiciai $a, $b, $c negali buti trikampio krastines. ";
    }
    echo "<br>";
}

?>

</body>
</html>