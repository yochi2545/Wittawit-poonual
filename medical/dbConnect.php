<?php

$hostName = "localhost";
$user = "root";
$pass = "";
$dbName = "medical_db";
$connect = mysqli_connect($hostName, $user, $pass, $dbName);

/* function toThaiNumber($number) {
    $numthai = array("๑", "๒", "๓", "๔", "๕", "๖", "๗", "๘", "๙", "๐");
    $numarabic = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    $str = str_replace($numarabic, $numthai, $number);
    return $str;
}

function DateThai($strDate) {
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strMonthCut = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}

function shortDateThai($strDateshort) {
    $strYearshort = date("Y", strtotime($strDateshort)) + 543;
    $strMonthshort = date("n", strtotime($strDateshort));
    $strDayshort = date("j", strtotime($strDateshort));
    $strMonthCutshort = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThaishort = $strMonthCutshort[$strMonthshort];
    return "$strDayshort $strMonthThaishort $strYearshort";
} */

?>