<?php
$sql = "SELECT * FROM klongri  WHERE id=1 ";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);
extract($row);
?>
<section class="position-relative py-5 jarallax" data-speed="0.5" style="background-image: url(assets/images/klongri02.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center ">
                <img src="assets/images/vector.png" class="img-fluid" style="width: 25%;">
                <h2 class="text-white display-4 font-weight-bold">โรงเรียนชาวนาบ้านคลองรี่</h2>
            </div>
        </div>
    </div>
</section>

<footer class="semi-footer p-5 text-center text-md-left">
    <div class="row">
        <div class="col-md-4">
            <a class="navbar-brand" href="#">
                <img src="assets/images/vector.png" height="60" class="d-inline-block align-top" alt="">
                <div>โรงเรียนชาวนาบ้านคลองรี่ จังหวัดชัยนาท</div>
            </a>
            <p>
                <i class="fa fa-phone-square"></i> <?php echo $row['number']; ?><br>
                <!-- <i class="fa fa-envelope"></i> email@example.com <br> -->
                <i class="fa fa-address-card"></i> <?php echo $row['address']; ?>
            </p>
        </div>
        <div class="col-md-3">
            <h4>เมนู</h4>
            <ul class="navbar-nav">
                <li class="nav-item <?php echo $_GET['pageto'] == ''  ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item <?php echo $_GET['pageto'] == 'about' ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php?pageto=about">เกี่ยวกับ</a>
                </li> -->
                <li class="nav-item <?php echo $_GET['pageto'] == 'blog' || $_GET['pageto'] == 'blog-detail' ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php?pageto=blog">บทความ</a>
                </li>

                <li class="nav-item <?php echo $_GET['pageto'] == 'activities' ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php?pageto=activities">กิจกรรม</a>
                </li>

            </ul>
        </div>
        <div class="col-md-5">
            <h4>แผนที่</h4>
            <?php echo $row['map']; ?>

        </div>
    </div>
</footer>
<footer class="footer">
    <span> COPYRIGHT © 2019
        <a href="./admin/login/" target="_blank">เข้าสู่ระบบ</a>
        ALL Right Reserved
    </span>
</footer>