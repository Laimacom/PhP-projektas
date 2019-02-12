<?php
require_once 'models.php';
require_once 'views.php';
$conn = connectDB();
forma();
if (isset($_POST['date'])) {
    insertDB($conn, $_POST['date'], $_POST['number'], $_POST['distance'], $_POST['time']);
} elseif (isset($_GET['edit'])){
    $row = selectDB($conn,$_GET['edit']);
    formaUpdate($row);
    if(isset($_POST['id'])) {
        updateDB($conn, $_POST['id'], $_POST['date'], $_POST['number'], $_POST['distance'], $_POST['time']);
    }
} elseif (isset($_GET['delete'])){
    deleteDB($conn);
}
showTable($conn);

