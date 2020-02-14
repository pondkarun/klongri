<?php
include('includes/condb.php');
$sql_login = "SELECT * FROM member  WHERE id = $_SESSION[id_member]";
$result_login = mysqli_query($condb, $sql_login);
$login = mysqli_fetch_array($result_login);

$LOGIN = $_SESSION["LOGIN"]; //สถานะการเข้าสู่ระบบ
if ($LOGIN == 'in') {

    $username_login = $login["username"]; //รหัสนักศึกษา หรือ username
    $password_login = $login["password"]; //รหัสผ่าน
    $firstname_login = $login["firstname"]; //ชื่อจริง
    $lastname_login = $login["lastname"]; //นามสกุล
    $status_login = $login["status"]; //สถานะ
    $name_login = $firstname_login . " " . $lastname_login;
    // $nickname_login = $login["nickname"];

    $day = date("Y-m-d"); //วันที่ปัจจุบัน
    $month = date("m"); //เดือนปัจจุบัน
    $year = date("Y"); //ปีปัจจุบัน

    $readonly = ($status_login == "superadmin" || $status_login == "admin") ? "" : "readonly";
    $readonlySUP = ($status_login != "superadmin") ? "readonly" : "";



    include('includes/function.php');
} else {
    session_destroy();
    Header("Location: ./login");
    exit;
}
