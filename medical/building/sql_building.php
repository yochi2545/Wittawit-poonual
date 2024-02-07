<?php

require '../dbConnect.php';

/* INSERT INTO building (building_type, building_name)
VALUES ("Surgery building", "Yoshi Tower"); */

if ($_POST['insert_or_update'] == "insert") {
    /* รับค่าจาก Form ไปใส่ในฐานข้อมูล */
    $building_type= $_POST['building_type'];
    $building_name = $_POST['building_name'];
   
    $sql = "Insert into building"
        . "(building_type, building_name)
          value('$building_type','$building_name')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="insert_building.php?alert_status=complete";
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
    $building_id = $_POST['building_id'];
    $building_type = $_POST['building_type'];
    $building_name = $_POST['building_name'];


    $sql = "UPDATE building set building_name='$building_name',"
        . "building_type='$building_type'where building_id=$building_id";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="index_building.php?update_status=complete";
        </script>
            ';
    }
}

if ($_GET['delete_id'] != "") {
    $idselect = $_GET['delete_id'];
    $sql = "delete from building where building_id=" . $idselect;
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo '
        <script type="text/javascript">
        window.location="index_building.php?delete_status=complete";
        </script>
            ';
    }
}
?>