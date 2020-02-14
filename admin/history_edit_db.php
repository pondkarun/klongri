<?php
include('includes/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
if ($_POST['id_history'] != "") { ?>
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




        $sql = "UPDATE history SET 

        date     =   '$_POST[date]',
        topic       =   '$_POST[topic]',
        detail        =   '$_POST[detail]'
    
        WHERE id = '$_POST[id_history]'";


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
                    window.location = 'history.php?active=history'
                } else {
                    window.location = 'history.php?active=history'
                }
            });
    </script>
    <?php } ?>
</body>

</html>
<?php } else {
    include('error.php');
} ?>