<meta charset="utf-8">
<?php
// print_r($_GET);
// exit;
include('includes/condb.php');
$id = $_GET['id_carousel'];
$sql = "DELETE FROM carousel WHERE id = $id";
$result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());

mysqli_close($condb);
if ($result) {
    echo "<script type='text/javascript'>";
    // echo "alert('เพิ่มช้อมูลสำเร็จ');";
    echo "window.location='carousel.php?active=carousel';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    //echo "alert('Error!');";
    echo "window.location='carousel.php?active=carousel';";
    echo "</script>";
}
?>