<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="Cookies_Gabijos.php" method="post">
    Greičio fiksavimo data ir laikas:
    <input type="datetime-local" name="laikas"><br>
    Automobilio numeris
    <input type="text" name="numeris"><br>
    Nuvaziuotas atstumas metrais
    <input type="number" name="atstumas"><br>
    Sugaistas laikas sekundemis
    <input type="number" name="sugaista"><br>
    <input type="submit" value="Send">
</form>

<?php

if ($_POST['numeris']) {
    if ($_COOKIE['masyvas']) {
    $cookies = unserialize($_COOKIE['masyvas']);
    }
    $cookies[] = $_POST;
    setcookie('masyvas', serialize($cookies));
}

if ($_COOKIE['masyvas']) {
    $masinos = unserialize($_COOKIE['masyvas']);
    usort($masinos, function ($b, $c) {
        return $c['sugaista'] - $b['sugaista'];
   });
?>
    <style>
           table {
    font-family: arial, sans-serif;
             border-collapse: collapse;
             width: 100%;
           }
           td, th {
    border: 1px solid #dddddd
    ;
             text-align: left;
             padding: 8px;
           }
       </style>       
        <table>
         <tr>
           <th>Numeris</th>
           <th>Greitis</th>
         </tr>
<?php
foreach ($masinos as $masina) {
    echo "
    <tr>
        <td>{$masina['numeris']}</td>
        <td>{$masina['sugaista']}</td>
    </tr>
    ";
   }
   echo '</table>';
}
?>
</body>
</html>