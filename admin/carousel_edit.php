<?php
include('includes/chk.php');
$id_carousel = $_GET["id_carousel"];
$sql = "SELECT * FROM carousel WHERE id = $id_carousel";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);
extract($row);

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>แก้ไขความเป็นมา</title>
  <link rel="icon" type="image/png" href="assets/image/logo-klongri.png" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">

</head>

<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <?php include("includes/navbar.php"); ?>
  <!-- Sidebar menu-->
  <?php include("includes/sidebar.php"); ?>
  <main class="app-content">

    <div class="app-title">
      <div>
        <h1><i class="fa fa-edit"></i> จัดการความเป็นมา</h1>
        <p>- แก้ไขความเป็นมา -</p>
      </div>

    </div>
    <form id="myform1" name="form1" method="POST" action="carousel_edit_db.php" novalidate enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">

          <div class="tile">

            <div class="row">

              <div class="col-lg-8 offset-lg-2">
                <center class="p-4"><img src="assets/image/<?php echo $row['img']; ?>" width="250px"></center>
                <div class="form-row">


                  <div class="form-group col-md-4">
                    <label for="date">เลือกรูป </label>
                    <input class="form-control btn-sm" name="img" id="inputimg" type="file">
                  </div>

                  <div class="form-group col-md-8">
                    <label for="topic">หัวเรื่อง</label>
                    <input type="text" name="topic" id="topic" class="form-control" placeholder="หัวเรื่อง" value="<?php echo $row['topic']; ?>">
                  </div>

                </div>

                <div class="form-row">

                  <div class="form-group col-lg-12 ">
                    <label for="detail">รายละเอียด</label>
                    <input type="text" name="detail" id="detail" class="form-control" placeholder="รายละเอียด" value="<?php echo $row['detail']; ?>">
                  </div>

                </div>


              </div>
            </div>

            <div class="tile-footer text-center">
              <div class="row">
                <input type="hidden" name="img2" value="<?php echo $row['img']; ?>">
                <input type="hidden" name="id_carousel" value="<?php echo $id_carousel ?>">
                <div class="col-md-12 ">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>ตกลง</button>&nbsp;&nbsp;&nbsp;
                  <a class="btn btn-secondary" href="carousel.php?active=carousel"><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </form>
  </main>
  <!-- Essential javascripts for application to work-->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="assets/js/plugins/pace.min.js"></script>

  <script type="text/javascript">
    $(function() {
      $("#myform1").on("submit", function() {
        var form = $(this)[0];
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      });
    });
  </script>


</body>

</html>