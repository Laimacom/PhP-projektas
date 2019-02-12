<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="index.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <label>Data</label><input type="text" name="date" value="<?= $row['date'] ?>"><br>
    <label>Numeris</label><input type="text" name="<?= $row['number'] ?>"><br>
    <label>Atstumas</label><input type="text" name="<?= $row['distance'] ?>"><br>
    <label>Laikas</label><input type="text" name="<?= $row['time'] ?>"<br>
    <button name="save" type="submit">Išsaugoti pakeitimus</button>
</form>
</body>
</html>