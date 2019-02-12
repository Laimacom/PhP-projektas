<?php
$n = [
    [1,3,4],
    [2,5],
    [2=>3,5=>8],
    [1,1,5=>1],
];

$columns = stulpeliai($n);

$totals = [];
foreach ($n as $row) {
    foreach ($row as $col => $value) {
        if (!isset($totals[$col])) $totals[$col] = 0;
        $totals[$col] += $value;
    }
}
?>
    <table border="1">
        <tr>
            <?php for($i = 0; $i < $columns; $i++): ?>
                <th><?= $i + 1; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($row = 0; $row < count($n); $row++): ?>
            <tr>
                <?php for ($col = 0; $col < $columns; $col++): ?>
                    <td><?= $n[$row][$col] ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        <tr>
            <?php for ($col = 0; $col < $columns; $col++): ?>
                <th><?= $totals[$col] ?></th>
            <?php endfor; ?>
        </tr>
    </table>
<?php
function columns($n) {
    $max = -1;
    foreach ($n as $value) {
        $maxkey = max(array_keys($value));
        if ($maxkey > $max) $max = $maxkey;
    }
    return $max + 1;
}
?>

