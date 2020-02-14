<?php
include('includes/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
if ($_POST['id_carousel'] != "") { ?>
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


        $upload = $_FILES['img']['tmp_name'];
        if ($upload != '') {
            $date1 = date("Ymd_His");
            $numrand = (mt_rand());
            $path = "assets/image/";
            $type = strrchr($_FILES['img']['name'], ".");
            $newname = "klongri_" . $numrand . $date1 . $type;
            $path_copy = $path . $newname;
            $path_link = "assets/image/" . $newname;
            move_uploaded_file($_FILES['img']['tmp_name'], $path_copy);
        } else {
            $newname = $_POST['img2'];
        }

        $sql = "UPDATE carousel SET 

        img     =   '$newname',
        topic       =   '$_POST[topic]',
        detail        =   '$_POST[detail]'
    
        WHERE id = '$_POST[id_carousel]'";


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
                    window.location = 'carousel.php?active=carousel'
                } else {
                    window.location = 'carousel.php?active=carousel'
                }
            });
    </script>
    <?php } ?>
</body>

</html>
<?php } else {
    include('error.php');
} ?>