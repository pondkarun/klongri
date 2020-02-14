<?php include('includes/chk.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>เพิ่มกิจกรรม</title>
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
        <h1><i class="fa fa-edit"></i> จัดการกิจกรรม</h1>
        <p>- เพิ่มกิจกรรม -</p>
      </div>
    </div>
    <form id="myform1" name="form1" method="POST" action="activities_add_db.php" novalidate enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">

          <div class="tile">

            <div class="row">

              <div class="col-lg-8 offset-lg-2">

                <div class="form-row">


                  <div class="form-group col-md-12">
                    <label for="subject">หัวเรื่อง <span class="text-red">*</span></label>
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="หัวเรื่อง" required>
                  </div>

                </div>

                <div class="form-row">

                  <div class="form-group col-lg-12 ">
                    <label for="sub_title">หัวเรื่องย่อย <span class="text-red">*</span></label>
                    <input type="text" name="sub_title" id="sub_title" class="form-control" placeholder="รายละเอียด" required>
                  </div>

                </div>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="image">เลือกรูปปก <span class="text-red">*</span></label>
                    <input class="form-control btn-sm" name="image" id="inputimg" type="file" required>
                  </div>
                </div>

                <div class="form-row">

                  <div class="form-group col-lg-12 ">
                    <label for="detail">รายละเอียด <span class="text-red">*</span></label>
                    <textarea class="d-none" name="detail" id="detail" rows="10" cols="80" required></textarea>
                  </div>

                </div>



              </div>
            </div>



            <div class="tile-footer text-center">
              <div class="row">

                <div class="col-md-12 ">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>ตกลง</button>&nbsp;&nbsp;&nbsp;
                  <a class="btn btn-secondary" href="activities.php?active=activities"><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</a>
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
    CKEDITOR.replace('detail', {
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