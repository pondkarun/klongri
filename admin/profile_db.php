<?php
include('includes/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
if ($_POST['username'] != "") { ?>
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

            $sql = "UPDATE member SET 

        
        firstname       =   '$_POST[firstname]',
        lastname        =   '$_POST[lastname]'

       
   
        WHERE id = '$_POST[id_member]'
        ";


            $result = mysqli_query($condb, $sql);

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