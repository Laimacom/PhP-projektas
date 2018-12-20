<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
//trikampio krastines a, b, c
$a = 3;
$b = 4;
$c = 5;
$plotas = 0;
$pusperimetris = 0;
if ($a+$b > $c && $a+$c > $b && $b+$c > $a){
    echo "Skaiciai $a, $b, $c gali buti trikampio krastines.";
    if ($a==$b && $b==$c){
        echo "Trikampis lygiakrastis.";
        $plotas = ($a*$a*sqrt(3))/4;
        echo "Jo plotas " . $plotas;
    } elseif ($a==$b || $a==$c || $b==$c){
        echo "Trikampis lygiasonis.";
        if ($a==$b){
            $plotas = ($a*$b)/2;
        } elseif($a==$c ){
            $plotas = ($a*$c)/2;
        } else {
            $plotas = ($b*$c)/2;
        }
        echo "Jo plotas " . $plotas;
    } else {
        echo "Trikampis ivairiakrastis.";
        $pusperimetris = ($a+$b+$c)/2;
        $plotas = sqrt($pusperimetris*($pusperimetris-$a)*($pusperimetris-$b)*($pusperimetris-$c));
        echo "Jo plotas " . $plotas;
    }
} else{
    echo "Skaiciai $a, $b, $c negali buti trikampio krastines.";
}
echo "<br>";
$a = 2;
$b = 10;
$c = 8;
$plotas = 0;
$pusperimetris = 0;
if ($a+$b > $c && $a+$c > $b && $b+$c > $a){
    echo "Skaiciai $a, $b, $c gali buti trikampio krastines.";
    if ($a==$b && $b==$c){
        echo "Trikampis lygiakrastis.";
        $plotas = ($a*$a*sqrt(3))/4;
        echo "Jo plotas " . $plotas;
    } elseif ($a==$b || $a==$c || $b==$c){
        echo "Trikampis lygiasonis.";
        if ($a==$b){
            $plotas = ($a*$b)/2;
        } elseif($a==$c ){
            $plotas = ($a*$c)/2;
        } else {
            $plotas = ($b*$c)/2;
        }
        echo "Jo plotas " . $plotas;
    } else {
        echo "Trikampis ivairiakrastis.";
        $pusperimetris = ($a+$b+$c)/2;
        $plotas = sqrt($pusperimetris*($pusperimetris-$a)*($pusperimetris-$b)*($pusperimetris-$c));
        echo "Jo plotas " . $plotas;
    }
} else{
    echo "Skaiciai $a, $b, $c negali buti trikampio krastines.";
}
echo "<br>";
$a = 5;
$b = 6;
$c = 5;
$plotas = 0;
$pusperimetris = 0;
if ($a+$b > $c && $a+$c > $b && $b+$c > $a){
    echo "Skaiciai $a, $b, $c gali buti trikampio krastines.";
    if ($a==$b && $b==$c){
        echo "Trikampis lygiakrastis.";
        $plotas = ($a*$a*sqrt(3))/4;
        echo "Jo plotas " . $plotas;
    } elseif ($a==$b || $a==$c || $b==$c){
        echo "Trikampis lygiasonis.";
        if ($a==$b){
            $plotas = ($a*$b)/2;
        } elseif($a==$c ){
            $plotas = ($a*$c)/2;
        } else {
            $plotas = ($b*$c)/2;
        }
        echo "Jo plotas " . $plotas;
    } else {
        echo "Trikampis ivairiakrastis.";
        $pusperimetris = ($a+$b+$c)/2;
        $plotas = sqrt($pusperimetris*($pusperimetris-$a)*($pusperimetris-$b)*($pusperimetris-$c));
        echo "Jo plotas " . $plotas;
    }
} else{
    echo "Skaiciai $a, $b, $c negali buti trikampio krastines.";
}
echo "<br>";
$a = 5;
$b = 5;
$c = 5;
$plotas = 0;
$pusperimetris = 0;
if ($a+$b > $c && $a+$c > $b && $b+$c > $a){
    echo "Skaiciai $a, $b, $c gali buti trikampio krastines.";
    if ($a==$b && $b==$c){
        echo "Trikampis lygiakrastis.";
        $plotas = ($a*$a*sqrt(3))/4;
        echo "Jo plotas " . $plotas;
    } elseif ($a==$b || $a==$c || $b==$c){
        echo "Trikampis lygiasonis.";
        if ($a==$b){
            $plotas = ($a*$b)/2;
        } elseif($a==$c ){
            $plotas = ($a*$c)/2;
        } else {
            $plotas = ($b*$c)/2;
        }
        echo "Jo plotas " . $plotas;
    } else {
        echo "Trikampis ivairiakrastis.";
        $pusperimetris = ($a+$b+$c)/2;
        $plotas = sqrt($pusperimetris*($pusperimetris-$a)*($pusperimetris-$b)*($pusperimetris-$c));
        echo "Jo plotas " . $plotas;
    }
} else{
    echo "Skaiciai $a, $b, $c negali buti trikampio krastines.";
}
echo "<br>";


//$n = [
//    [3,4,5],
//    [2,10,8],
//    [5,6,5],
//    [5,5,5],
//];
//$a = 0;
//$b = 0;
//$c = 0;
//for ($i = 0; $i < count($n); $i++){
//    //for ($j = 0; $j < count($n[$i]); $j++) {
//        $a = $n[0];
//        $b = $n[1];
//        $b = $n[2];
//    //}
//}
//echo $a, $b, $c;

?>

</body>
</html>