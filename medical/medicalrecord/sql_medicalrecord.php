<?php

require '../dbConnect.php';

/* INSERT INTO medicalrecord (medical_record_id, age, date, health)
VALUES ("1", "23", "230645", "good"); */

if ($_POST['insert_or_update'] == "insert") {
    /* รับค่าจาก Form ไปใส่ในฐานข้อมูล */
    $age= $_POST['age'];
    $date = $_POST['date'];
    $health = $_POST['health'];
   
    $sql = "Insert into medicalrecord"
        . "(age, date, health)
          value('$age', '$date', '$health')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="insert_medicalrecord.php?alert_status=complete";
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
    $medical_record_id = $_POST['medical_record_id'];
    $age = $_POST['age'];
    $date = $_POST['date'];
    $health = $_POST['health'];

    $sql = "UPDATE medical_record_id set health='$health', date='$date', age='$age', medical_record_id='$medical_record_id'
    where medical_record_id=$medical_record_id";

    $result = mysqli_query($connect, $sql);  
    
    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="index_medicalrecord.php?update_status=complete";
        </script>
            ';
    }
}

if ($_GET['delete_id'] != "") {
    $idselect = $_GET['delete_id'];
    $sql = "delete from medicalrecord where medical_record_id=" . $idselect;
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="index_medicalrecord.php?delete_status=complete";
        </script>
            ';
    }
}
?>