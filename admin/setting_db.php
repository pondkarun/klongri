<?php
include('includes/condb.php');
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
    <script src="assets/js/sweetalert/sweetalert.min.js"></script>
    <?php

    $sql = "UPDATE klongri SET 

    
        address        =   '$_POST[address]',
        number    =   '$_POST[number]',
        map    =   '$_POST[map]',
        home   =    '$_POST[home]'
       
   
        WHERE id = 1
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
                        window.location = 'setting.php?active=setting'
                    } else {
                        window.location = 'setting.php?active=setting'
                    }
                });
        </script>
    <?php } else {
        include('error.php');
    } ?>
</body>

</html>