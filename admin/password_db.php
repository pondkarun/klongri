<?php
include('includes/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
if ($_POST['password'] != "") { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>

    <body>
        <script src="assets/js/sweetalert/sweetalert.min.js"></script>
        <?php

            $password_old = md5($_POST['password_old']);
            $password_new = $_POST['password_new'];
            $password = $_POST['password'];

            $check = "SELECT  password FROM member WHERE password = '$password_old' ";
            $result1 = mysqli_query($condb, $check);
            $num = mysqli_num_rows($result1);

            if ($num <= 0) { ?>


            <script>
                swal({
                        title: "Error !",
                        text: "Password ไม่ถูกต้อง !",
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
            <?php } else {

                    if ($password_new != $password) { ?>

                <script>
                    swal({
                            title: "Error !",
                            text: "Password ไม่เหมือนกัน !",
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

            <?php } else {

                        $new_password =   md5($password);
                        $sql = "UPDATE member SET 

        
                password       =   '$new_password'
               
                
                

                WHERE id = '$_POST[id_member]'
                ";


                        $result = mysqli_query($condb, $sql);
                    }
                }


                mysqli_close($condb);

                if ($result) { ?>
            <script>
                swal({
                        title: "บันทึกสำเร็จ !",
                        text: "",
                        icon: "success",
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = 'index.php?active=member'
                        } else {
                            window.location = 'index.php?active=member'
                        }
                    });
            </script>
        <?php } else {
                include('error.php');
            } ?>
    </body>

    </html>
<?php } else {
    include('error.php');
} ?>