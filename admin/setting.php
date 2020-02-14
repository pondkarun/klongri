<?php
include('includes/chk.php');
$id = 1;
$sql = "SELECT * FROM klongri  WHERE id=$id ";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);
extract($row);

if ($status_login == "admin") { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <title>แก้ไขการตั้งค่าหน้าเว็บ</title>
    <link rel="icon" type="image/png" href="assets/image/logo-klongri.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <script src="assets/ckeditor/ckeditor.js"></script>
  </head>

  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include("includes/navbar.php"); ?>
    <!-- Sidebar menu-->
    <?php include("includes/sidebar.php"); ?>
    <main class="app-content">

      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> จัดการการตั้งค่าหน้าเว็บ</h1>
          <p>- แก้ไขการตั้งค่าหน้าเว็บ -</p>
        </div>

      </div>
      <form id="myform1" name="form1" method="POST" action="setting_db.php" novalidate enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">

            <div class="tile">

              <div class="row">

                <div class="col-lg-8 offset-lg-2">



                  <div class="form-row">

                    <div class="form-group col-lg-9">
                      <label for="address">ที่อยู่ <span class="text-red">*</span></label>
                      <textarea name="address" id="address" class="form-control" required><?php echo $row['address']; ?></textarea>
                    </div>

                    <div class="form-group col-lg-3">
                      <label for="number">เบอร์โทร <span class="text-red">*</span></label>
                      <input type="text" name="number" id="number" class="form-control" required placeholder="ชื่อผู้ใช้งาน" value="<?php echo $row['number']; ?>">
                    </div>

                  </div>


                  <div class="form-row">

                    <div class="form-group col-lg-12">
                      <label for="map">ฝั่งแผนที่ <span class="text-red">*</span></label>
                      <textarea name="map" id="map" cols="30" rows="10" class="form-control" required><?php echo $row['map']; ?></textarea>
                    </div>

                  </div>

                  <div class="form-row">

                    <div class="form-group col-lg-12 ">
                      <label for="home">จัดการหน้าแรก <span class="text-red">*</span></label>
                      <textarea class="d-none" name="home" id="home" rows="10" cols="80" required><?php echo $row['home']; ?></textarea>
                    </div>

                  </div>


                </div>
              </div>



              <div class="tile-footer text-center">
                <div class="row">

                  <div class="col-md-12 ">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>ตกลง</button>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="index.php?active=member"><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</a>
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

      //ckediter
      CKEDITOR.replace('home', {
        onLoad: function(editor) {
          CKEDITOR.addCss(
            'img {width:100%}')
        },
        filebrowserBrowseUrl: 'assets/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl: 'assets/filemanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl: 'assets/filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr='

      });
    </script>


  </body>

  </html>
<?php } else {
  include('error.php');
} ?>