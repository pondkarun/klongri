<?php
include('includes/chk.php');
if ($status_login == "admin") {
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>จัดการสมาชิก</title>
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
        <p>- จัดการสมาชิก -</p>
      </div>
      <a href="member_add.php?active=member" class="btn btn-primary">เพิ่มสมาชิก</a>
    </div>

    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <div class="row">

            <div class="col-12 ">
              <?php
                $year = date('Y');
                $query = "SELECT * FROM member WHERE id != 0";
                $result = mysqli_query($condb, $query);
                ?>


              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="DataTable">
                  <thead>
                    <tr class="text-center">
                      <th width="5%">ลำดับ</th>
                      <th width="20%">รหัสผู้ใช้งาน</th>
                      <th>ชื่อ - นามสกุล</th>

                      <th width="10%">จัดการ</th>

                    </tr>
                  </thead>

                  <tbody>
                    <?php while ($row = mysqli_fetch_array($result)) {  ?>
                    <tr>
                      <td align="center"><?php echo ++$i; ?></td>
                      <td align="center"><?php echo $row['username']; ?></td>
                      <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>

                      <td align="center">
                        <div class="row">

                          <a href="member_edit.php?id=<?php echo $row[id]; ?>&active=member" class="col btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>

                        </div>
                      </td>

                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>



        </div>

      </div>
    </div>
  </main>
  <!-- Essential javascripts for application to work-->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="assets/js/plugins/pace.min.js"></script>
  <script src="assets/js/sweetalert/sweetalert.min.js"></script>
  <!-- Data table plugin-->
  <script type="text/javascript" src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="assets/js/plugins/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
    $('#DataTable').DataTable();
  </script>
</body>

</html>
<?php } else {
  include('error.php');
} ?>