<?php include('includes/condb.php');
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
    <title>Document</title>
</head>

<body>

    <script src="assets/js/sweetalert/sweetalert.min.js"></script>
    <?php


    $upload = $_FILES['image']['tmp_name'];
    if ($upload != '') {
        $date1 = date("Ymd_His");
        $numrand = (mt_rand());
        $path = "assets/image/";
        $type = strrchr($_FILES['image']['name'], ".");
        $newname = "klongri_" . $numrand . $date1 . $type;
        $path_copy = $path . $newname;
        $path_link = "assets/image/" . $newname;
        move_uploaded_file($_FILES['image']['tmp_name'], $path_copy);
    } else {
        $newname = null;
    }

    $subject =  trim($_POST['subject']);
    $sub_title =  $_POST['sub_title'];
    $detail =  $_POST['detail'];

    $sql = "INSERT INTO activities
            (
            
            
                image,
                subject,
                sub_title,
                detail

            
            )
            VALUES
            (
            
            '$newname',
            '$subject',
            '$sub_title',
            '$detail'
            
            
            )
            ";

    $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
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
                        window.location = 'activities.php?active=activities'
                    } else {
                        window.location = 'activities.php?active=activities'
                    }
                });
        </script>
    <?php } else {
        include('error.php');
    } ?>
</body>

</html>