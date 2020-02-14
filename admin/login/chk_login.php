<?php
include('../includes/condb.php');
session_start();
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    <script src="../assets/js/sweetalert/sweetalert.min.js"></script>
    <?php

    if ($_POST['username'] != "") {


        $username = strtolower($_POST['username']);
        $password = MD5($_POST['password']);

        $sql = "SELECT * FROM member WHERE username='$username' AND password='$password' ";

        $result = mysqli_query($condb, $sql);


        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION["id_member"] = $row["id"];
            $_SESSION["LOGIN"] = 'in';

            Header("Location: ../index.php");
        } else { ?>


    <script>
        swal({
                title: "Error !",
                text: "ชื่อผู้ใช้งาน หรือ รหัสผ่าน ไม่ถูกต้อง !",
                icon: "warning",
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.history.back();
                } else {
                    window.history.back();
                }
            });
    </script>

    <?php }
    } else {

        Header("Location: ../login");
    }
    ?>
</body>

</html>