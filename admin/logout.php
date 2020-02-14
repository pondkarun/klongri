<?php
include("includes/condb.php");
session_start();
$sql_chklogin = "UPDATE staff SET LOGIN = 'out' WHERE id_staff = '$_SESSION[id_staff]'";
$result_chklogin = mysqli_query($condb, $sql_chklogin);
mysqli_close($condb);
session_destroy();
header("Location: ./login/");
