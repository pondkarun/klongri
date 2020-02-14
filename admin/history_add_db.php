<?php include('includes/condb.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit;
if ($_POST['date'] != "") { ?>
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


        $date =  $_POST['date'];
        $topic =  trim($_POST['topic']);
        $detail =  $_POST['detail'];

        $sql = "INSERT INTO history
            (
            
            
                date,
                topic,
                detail

            
            )
            VALUES
            (
            
            '$date',
            '$topic',
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
                    window.location = 'history.php?active=history'
                } else {
                    window.location = 'history.php?active=history'
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