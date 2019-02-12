<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <label>Data ir laikas</label> <input type="date" name="data"> <input type="time" name="time"><br>
    <label>Automobilio numeris</label> <input type="text" name="numeris"><br>
    <label>Nuvažiuotas atstumas(m)</label> <input type="text" name="atstumas"><br>
    <label>Laikas (s)</label> <input type="text" name="laikas"><br>
    <input type="submit" value="Pateikti">
</form>
</body>
</html>
<?php

session_start();
$_SESSION['sarasas'][] = $_POST;

echo '<table border="1">';
      echo '<tr>
        <th>Data</th>
        <th>Numeris</th>
        <th>Atstumas</th>
        <th>Laikas</th>
      </tr>';

foreach ($_SESSION['sarasas'] as $automobilis) {
    echo '<tr>';
    echo '<td>' . $automobilis['data'] . '</td>';
    echo '<td>' . $automobilis['numeris'] . '</td>';
    echo '<td>' . $automobilis['atstumas'] . '</td>';
    echo '<td>' . $automobilis['laikas'] . '</td>';
    echo '</td>';
}
echo '</table>';