<?php

require '../dbConnect.php';

/* INSERT INTO doctor (doctor_name, doctor_room)
VALUES ("Wittawit", "YoshiRoom"); */

if ($_POST['insert_or_update'] == "insert") {
    /* รับค่าจาก Form ไปใส่ในฐานข้อมูล */
    $doctor_name= $_POST['doctor_name'];
    $doctor_room = $_POST['doctor_room'];
   
    $sql = "Insert into doctor"
        . "(doctor_name, doctor_room)
          value('$doctor_name','$doctor_room')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="insert_doctor.php?alert_status=complete";
        </script>
            ';
    } else {
        echo '
        <script type="text/javascript">
        window.location="insert_book.php?alert_status=notcomplete";
        </script>
            ';
    }
}

if ($_POST['insert_or_update'] == "update") {
    /* รับค่าจาก Form ไปใส่ในฐานข้อมูล */
    $doctor_id = $_POST['doctor_id'];
    $doctor_name = $_POST['doctor_name'];
    $doctor_room = $_POST['doctor_room'];


    $sql = "UPDATE doctor set doctor_name='$doctor_name',"
        . "doctor_room='$doctor_room'where doctor_id=$doctor_id";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="../index.php?update_status=complete";
        </script>
            ';
    }
}

if ($_GET['delete_id'] != "") {
    $idselect = $_GET['delete_id'];
    $sql = "delete from doctor where doctor_id=" . $idselect;
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="../index.php?delete_status=complete";
        </script>
            ';
    }
}
?>