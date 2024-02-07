<?php

require '../dbConnect.php';

/* INSERT INTO patient (patient_name, patient_room)
VALUES ("Wittawit", "Yoshi Room"); */

if ($_POST['insert_or_update'] == "insert") {
    /* รับค่าจาก Form ไปใส่ในฐานข้อมูล */
    $patient_name= $_POST['patient_name'];
    $patient_room = $_POST['patient_room'];
   
    $sql = "Insert into patient"
        . "(patient_name, patient_room) value('$patient_name','$patient_room')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="insert_patient.php?alert_status=complete";
        </script>
            ';
    } else {
        echo '
        <script type="text/javascript">
        window.location="insert_patient.php?alert_status=notcomplete";
        </script>
            ';
    }
}

if ($_POST['insert_or_update'] == "update") {
    /* รับค่าจาก Form ไปใส่ในฐานข้อมูล */
    $patient_id = $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $patient_room = $_POST['patient_room'];


    $sql = "UPDATE patient set patient_room='$patient_room',"
        . "patient_name='$patient_name'where patient_id=$patient_id";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="index_patient.php?update_status=complete";
        </script>
            ';
    }
}

if ($_GET['delete_id'] != "") {
    $idselect = $_GET['delete_id'];
    $sql = "delete from patient where patient_id=" . $idselect;
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="index_patient.php?delete_status=complete";
        </script>
            ';
    }
}
?>