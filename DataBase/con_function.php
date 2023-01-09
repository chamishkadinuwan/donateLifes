<?php
include("dbconn.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (array_key_exists("getDonerInfo", $_POST)) {

    $nic = $_POST['nic'];
    $data = "";
    $sql = "SELECT * FROM auth_donor WHERE nic='$nic' AND status=1";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $sql = "UPDATE auth_donor SET status=2 WHERE nic='$nic'";
        if ($conn->query($sql) === TRUE) {
            $row = $result->fetch_assoc();
            $data = ['code' => 'code_2', 'user_id' => $row['id'], 'name' => $row['name'], 'nic' => $row['nic'], 'dob' => $row['dob'], 'gender' => $row['gender'], 'address' => $row['address'], 'mobile' => $row['mobile'], 'type_of_organ' => $row['type_of_organ'], 'blood_group' => $row['blood_group']];
        } else {
            $data = ['code' => 'code_1'];
        }
    } else {
        $data = ['code' => 'code_1'];
    }
    header('Content-type: application/json');
    echo json_encode($data);
}

if (array_key_exists("updateOrgan", $_POST)) {

    $t = $_POST['type'];
    $b = $_POST['blood'];
    $n = $_POST['nic'];
    $data = "";
    $sql = "INSERT INTO organ_bank VALUES(NULL,'$t','$b','$n')";
    if ($conn->query($sql) === TRUE) {
        $data = ['code' => 'code_2'];
    } else {
        $data = ['code' => 'code_1'];
    }
    header('Content-type: application/json');
    echo json_encode($data);
}
if (array_key_exists("removeOrgan", $_POST)) {

    $t = $_POST['id'];
    $data = "";
    $sql = "DELETE FROM organ_requests WHERE id='$t'";
    if ($conn->query($sql) === TRUE) {
        $data = ['code' => 'code_2'];
    } else {
        $data = ['code' => 'code_1'];
    }
    header('Content-type: application/json');
    echo json_encode($data);
}