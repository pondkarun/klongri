<?php
include('includes/chk.php');
$id = $_GET["id"];
$sql = "SELECT * FROM member  WHERE id=$id ";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);
extract($row);

if ($status_login == "admin") { ?>


  <!DOCTYPE html>
  <html lang="en">

  <head>

    <title>แก้ไขสมาชิก</title>
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
          <h1><i class="fa fa-edit"></i> จัดการสมาชิก</h1>
          <p>- แก้ไขสมาชิก -</p>
        </div>

      </div>
      <form id="myform1" name="form1" method="POST" action="member_edit_db.php" novalidate enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12">

            <div class="tile">

              <div class="row">

                <div class="col-lg-8 offset-lg-2">

                  <div class="form-row">

                    <div class="form-group col-lg-9">
                      <label for="username">Username <span class="text-red">*</span></label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="ชื่อผู้ใช้งาน" required readonly value="<?php echo $row['username']; ?>">
                    </div>

                    <div class="form-group col-lg-3">
                      <label for="username">สถานะ <span class="text-red">*</span></label>
                      <select name="status" class="form-control">
                        <?php echo $member = ($row['status'] == 'admin') ? '<option value="admin">ผู้ดูแลระบบ</option>' : '<option value="member">สมาชิก</option>'; ?>
                        <?php echo $admin = ($row['status'] == 'admin') ? '<option value="member">สมาชิก</option>' : '<option value="member">ผู้ดูแลระบบ</option>'; ?>
                      </select>
                    </div>

                  </div>

                  <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="firstname">ชื่อจริง <span class="text-red">*</span></label>
                      <input type="text" name="firstname" id="firstname" class="form-control" placeholder="ชื่อจริง" required value="<?php echo $row['firstname']; ?>">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="lastname">นามสกุล <span class="text-red">*</span></label>
                      <input type="text" name="lastname" id="lastname" class="form-control" placeholder="นามสกุล" required value="<?php echo $row['lastname']; ?>">
                    </div>

                  </div>




                </div>
              </div>



              <div class="tile-footer text-center">
                <div class="row">

                  <div class="col-md-12 ">
                    <input type="hidden" name="id_member" value="<?php echo  $row['id']; ?>">
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
    </script>


  </body>

  </html>
<?php } else {
  include('error.php');
} ?>