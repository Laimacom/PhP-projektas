<?php
function forma(){?>
    <form method="post">
    <label>Data</label><input type="text" name="date" required><br>
    <label>Numeris</label><input type="text" name="number" required><br>
    <label>Atstumas</label><input type="text" name="distance" required><br>
    <label>Laikas</label><input type="text" name="time" required><br>
    <br>
    <input type="submit" value="Siųsti">
</form>
    <?php
}

function formaUpdate($row){
    ?>
    <form method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <label>Data</label><input type="text" name="date" value="<?= $row['date'] ?>"><br>
        <label>Numeris</label><input type="text" name="number" value="<?= $row['number'] ?>"><br>
        <label>Atstumas</label><input type="text" name="distance" value="<?= $row['distance'] ?>"><br>
        <label>Laikas</label><input type="text" name="time" value="<?= $row['time'] ?>"<br>
        <button name="save" type="submit">Išsaugoti pakeitimus</button>
    </form>
    <?php
}

function showTable($conn){
$page = 5;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
if ($page < 5) $page = 5;
if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
} else {
    $offset = 0;
}
$sql = 'SELECT `id`, `date`, `number`, `distance`, `time` FROM radars ORDER BY `date` DESC LIMIT ' . ($page + 1) . ' OFFSET ' . $offset;
if (!($result = $conn->query($sql))) {
    die("Error: " . $conn->error);
}
if ($result->num_rows > 0) {
?>
<?php if ($offset > 0): ?>
    <a href="<?= "?offset=".($offset >= $page ? $offset - $page : 0) ?>">Atgal</a>
<?php endif; ?>

<?php if ($result->num_rows == $page + 1): ?>
    <a href="<?= "?offset=".($offset + $page) ?>">Pirmyn</a>
<?php endif; ?>

<table border=1>
    <tr>
        <th>ID</th>
        <th>Data</th>
        <th>Numeris</th>
        <th>Atstumas</th>
        <th>Laikas</th>
        <th></th>
        <th></th>
    </tr>

    <?php
    for ($i = 0; $i < $page; $i++) {
        if (!($row = $result->fetch_assoc())) break;
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['distance']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><a href="?edit=<?= $row['id'] ?>">Redaguoti</a></td>
            <td><a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Ar tikrai trinti?')">Ištrinti</a></td>
        </tr>
        <?php
    }
    echo '</table>';
    } else {
        echo 'nėra duomenų';
    }
    $conn->close();
    ?>
<!--    <a href="forma.php">Įvesti</a>-->
<?php }