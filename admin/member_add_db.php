<?php include('includes/condb.php');
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
    <title>Document</title>
</head>

<body>

    <script src="assets/js/sweetalert/sweetalert.min.js"></script>
    <?php


        $check = "SELECT  username FROM member WHERE username = '$_POST[username]' ";
        $result1 = mysqli_query($condb, $check);
        $num = mysqli_num_rows($result1);

        if ($num > 0) { ?>


    <script>
        swal({
                title: "Error !",
                text: "มี USERNAME นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !",
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

            $firstname =  trim($_POST['firstname']);

            $lastname =  trim($_POST['lastname']);

            $username =  trim(strtolower($_POST['firstname']));

            $password =  md5(trim($_POST['password']));

            $sql = "INSERT INTO member
      (
     
       
        firstname,
        lastname,
        username,
        password

      
      )
      VALUES
      (
      
      '$firstname',
      '$lastname',
      '$username',
      '$password'
      
      )
      ";

            $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
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
                    window.location = 'member.php?active=member'
                } else {
                    window.location = 'member.php?active=member'
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