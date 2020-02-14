<?php include('includes/chk.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>จัดการความเป็นมา</title>
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
        <p>- จัดการความเป็นมา -</p>
      </div>
      <a href="history_add.php?active=history" class="btn btn-primary">เพิ่มความเป็นมา</a>
    </div>

    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <div class="row">

            <div class="col-12 ">
              <?php
              $year = date('Y');
              $query = "SELECT * FROM history ORDER BY date ASC";
              $result = mysqli_query($condb, $query);
              $num = mysqli_num_rows($result);
              ?>
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="DataTable">
                  <thead>
                    <tr class="text-center">
                      <th width="5%">ลำดับ</th>
                      <th width="10%">วันที่</th>
                      <th width="10%">หัวเรื่อง</th>
                      <th width="30%">รายละเอียด</th>
                      <th width="10%">จัดการ</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php if ($num <= 0) { ?>
                    <tr>
                      <td align="center" colspan="5">No data available in table</td>
                    </tr>
                    <?php } ?>
                    <?php while ($row = mysqli_fetch_array($result)) {  ?>
                    <tr>
                      <td align="center"><?php echo ++$i; ?></td>
                      <td align="center"><?php echo DateThai($row['date']); ?></td>
                      <td align="center"><?php echo $row['topic']; ?></td>
                      <td><?php echo $row['detail']; ?></td>
                      <td align="center">
                        <div class="row">
                          <a href="history_edit.php?id_history=<?php echo $row[id]; ?>&active=history" class="col btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="#" class="col btn btn-sm btn-danger" onclick="myFunction(<?php echo $row[id]; ?>)"><i class="fa fa-trash"></i></a>

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
    // $('#DataTable').DataTable();

    function myFunction(key) {

      swal({
          title: "แน่ใจไหมที่จะลบ?",
          text: "",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = 'history_del_db.php?id_history=' + key;
          }
        });
    }
  </script>
</body>

</html>