<?php include('includes/chk.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>จัดการรูปภาพ</title>
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
        <h1><i class="fa fa-edit"></i> จัดการรูปภาพ</h1>
        <p>- จัดการรูปภาพ -</p>
      </div>
      <!-- <a href="carousel_add.php?active=carousel" class="btn btn-primary">เพิ่มรูปภาพ</a> -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        เพิ่มรูปภาพ
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">เพิ่มรูปภาพ</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="myform1" name="form1" method="POST" action="carousel_add_db.php" novalidate enctype="multipart/form-data">
              <div class="modal-body">
                <label for="date">เลือกรูป <span class="text-red">*</span></label>
                <input class="form-control btn-sm" name="img" id="inputimg" type="file" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึก</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">

        <div class="tile">

          <div class="row">

            <div class="col-12 ">
              <?php
              $year = date('Y');
              $query = "SELECT * FROM carousel";
              $result = mysqli_query($condb, $query);
              $num = mysqli_num_rows($result);
              ?>
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="DataTable">
                  <thead>
                    <tr class="text-center">
                      <th width="1%">ลำดับ</th>
                      <th width="10%">รูปภาพ</th>
                      <!-- <th width="2%">สถานะ</th> -->
                      <th width="2%">จัดการ</th>
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
                        <td><a href="assets/image/<?php echo $row['img']; ?>" target="_blank"><img class="img-fluid d-block mx-auto" width="30%" src="assets/image/<?php echo $row['img']; ?>" alt="<?php echo $row['img']; ?>"></a></td>
                        <!-- <td align="center">
                          <div class="toggle-flip">
                            <label>
                              <input class="toggle-event" data-id="<?php echo $row[id]; ?>" type="checkbox" checked><span class="flip-indecator" data-toggle-on="เปิด" data-toggle-off="ปิด"></span>
                            </label>
                          </div>
                        </td> -->
                        <td align="center">
                          <div class="row">
                            <!-- <i href="carousel_edit.php?id_carousel=<?php echo $row[id]; ?>&active=carousel" class="col btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> -->
                            <button type="button" class="col btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row[id]; ?>">
                              <i class="fa fa-edit"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter<?php echo $row[id]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle<?php echo $row[id]; ?>" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">

                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle<?php echo $row[id]; ?>">แก้ไขรูปภาพ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <label class="pt-3" for="date">รูปเดิม</label>
                                  <center class="p-4"><img src="assets/image/<?php echo $row['img']; ?>" width="250px"></center>
                                  <form id="myform1" name="form1" method="POST" action="carousel_edit_db.php" novalidate enctype="multipart/form-data">
                                    <div class="modal-body">
                                      <label for="date">เลือกรูปใหม่ <span class="text-red">*</span></label>
                                      <input class="form-control btn-sm" name="img" id="inputimg" type="file" required>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                      <input type="hidden" name="id_carousel" value="<?php echo $row[id]; ?>">
                                      <button type="submit" class="btn btn-primary">บันทึก</button>
                                    </div>
                                  </form>
                                </div>

                              </div>
                            </div>
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
            window.location = 'carousel_del_db.php?id_carousel=' + key;
          }
        });
    }

    $('.toggle-event').change(function() {
      console.log($(this).is(':checked'), $(this).data('id'));
    })
  </script>
</body>

</html>