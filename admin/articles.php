<?php include('includes/chk.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>จัดการบทความ</title>
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
        <h1><i class="fa fa-edit"></i> จัดการบทความ</h1>
        <p>- จัดการบทความ -</p>
      </div>
      <a href="articles_add.php?active=articles" class="btn btn-primary">เพิ่มบทความ</a>
    </div>

    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <div class="row">

            <div class="col-12 ">
              <?php
              $year = date('Y');
              $query = "SELECT * FROM articles";
              $result = mysqli_query($condb, $query);
              $num = mysqli_num_rows($result);
              ?>
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="DataTable">
                  <thead>
                    <tr class="text-center">
                      <th width="5%">ลำดับ</th>
                      <th width="10%">รูปปก</th>
                      <th width="10%">หัวเรื่อง</th>
                      <th width="30%">หัวเรื่องย่อย</th>
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
                      <td><a href="assets/image/<?php echo $row['image']; ?>" target="_blank"><img class="img-fluid d-block mx-auto" src="assets/image/<?php echo $row[image]; ?>" alt="<?php echo $row['image']; ?>"></a></td>
                      <td align="center"><?php echo $topic = ($row['subject'] == "") ? "-" : $row[subject]; ?></td>
                      <td align="center"><?php echo $detail = ($row['sub_title'] == "") ? "-" : $row[sub_title]; ?></td>
                      <td align="center">
                        <div class="row">
                          <a href="articles_edit.php?id_articles=<?php echo $row[id]; ?>&active=articles" class="col btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
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
    $('#DataTable').DataTable();



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
            window.location = 'articles_del_db.php?id_articles=' + key;
          }
        });
    }
  </script>
</body>

</html>