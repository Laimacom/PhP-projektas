<?php
function connectDB(){
    $servername = 'localhost';
    $dbname = 'Auto';
    $username = 'Auto';
    $password = 'LabaiSlaptas123';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Nepavyko prisjungti: ' . $conn->connect_error);
    }
    return $conn;
}

function insertDB($conn, $data, $numeris, $kelias, $laikas ){
    $insert = "INSERT INTO radars(`date`, `number`, `distance`, `time`) VALUES(?, ?, ?, ?)";
    if (!($stmt = $conn->prepare($insert))) {
        die("Error: " . $conn->error);
    }
    if (!$stmt->bind_param("ssdd", $data, $numeris, $kelias, $laikas)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }
}

function selectDB($conn, $id){
    $row = [];
    $sql = "SELECT * FROM radars WHERE id =". intval($id) ;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        //var_dump($row);
    }
    return $row;
}

function updateDB($conn, $id, $data, $numeris, $kelias, $laikas){
    if (isset($_POST['save'])) {
        if (intval($_REQUEST['id']) > 0) {
            $update = "UPDATE radars SET `data` = ?,`numeris` = ?,`distance` = ?, `time` = ? WHERE id = ?". intval($_GET['edit']);
            if (!($stmt = $conn->prepare($update))) {
                die("Error: " . $conn->error);
            }
            if (!$stmt->bind_param("ssddi", $data, $numeris, $kelias, $laikas, $id)) {
                echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
            }
            if (!$stmt->execute()) {
                echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            }
        }
    }

}
function deleteDB($conn){
    $delete= "DELETE FROM radars WHERE id = ". intval($_GET['delete']);
    if (!($stmt = $conn->query($delete))) {
        die("Error: " . $conn->error);
    }
}

