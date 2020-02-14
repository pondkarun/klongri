<?php

include('admin/includes/condb.php');

include('admin/includes/function.php');

$query = "SELECT * FROM `carousel` WHERE `status` = 'true'";

$result = mysqli_query($condb, $query);

$num = mysqli_num_rows($result);



$query2 = "SELECT * FROM `articles` WHERE  `status` = 'true' ORDER BY  rand() LIMIT 3";

$result2 = mysqli_query($condb, $query2);



?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>โรงเรียนชาวนาบ้านคลองรี่</title>

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/klongri.png">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <style>



    </style>

</head>



<body>



    <div class="container">



        <div class="row">

            <div class="col-xs-12 col-md-1">

                <center><img src="assets/images/vector2.png" width="300px"></center>

            </div>

            <div class="col-xs-12 col-md-11">

                <center class="hader">โรงเรียนชาวนาบ้านคลองรี่ จังหวัดชัยนาท</center>

            </div>



        </div>



    </div>



    <div class="container">

        <section class="shadow">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">

                    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->



                    <?php for ($i = 0; $i < $num; $i++) { ?>

                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php echo  $active = ($i == 0) ? "active" : ""; ?>"></li>

                    <?php } ?>

                </ol>

                <div class="carousel-inner">

                    <?php while ($row = mysqli_fetch_array($result)) {  ?>

                        <div class="carousel-item <?php echo  $active = ($y == 0) ? "active" : ""; ?>">

                            <img src="admin/assets/image/<?php echo $row[img]; ?>" class="d-block w-100" max-width="1027px" max-height="400px">

                        </div>

                    <?php $y++;
                    } ?>

                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    <span class="sr-only">Previous</span>

                </a>

                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

                    <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    <span class="sr-only">Next</span>

                </a>

            </div>

        </section>

    </div>



    <!-- navbar -->

    <div class="container">

        <section class="shadow">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">



                <div class="collapse navbar-collapse" id="navbarKey">

                    <ul class="navbar-nav ml-auto text-center">

                        <li class="nav-item <?php echo $_GET['pageto'] == ''  ? 'active' : '' ?>">

                            <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>

                        </li>



                        <li class="nav-item <?php echo $_GET['pageto'] == 'blog' || $_GET['pageto'] == 'blog-detail' ? 'active' : '' ?>">

                            <a class="nav-link" href="index.php?pageto=blog">บทความ</a>

                        </li>



                        <li class="nav-item <?php echo $_GET['pageto'] == 'activities' || $_GET['pageto'] == 'activities-detail' ? 'active' : '' ?>">

                            <a class="nav-link" href="index.php?pageto=activities">กิจกรรม</a>

                        </li>



                    </ul>

                </div>

            </nav>

        </section>

    </div>



    <div class="container pt-1">



        <div class="row">

            <div class="col-md-3 pb-3">



                <div class="card text-center shadow ">

                    <div class="card-header">

                        <h4>ผู้บริหารโรงเรียนชาวนาบ้านคลองรี่</h4>

                    </div>

                    <div class="card-body">

                        <div>

                            <center>

                                <img src="assets/images/3275.jpg" width="100%" class="card-img-top">

                                <h4 class="pt-3">นายสุนทร มณฑา</h4>

                            </center>

                        </div>

                    </div>



                </div>

                <br>

                <div class="card text-center shadow ">

                    <div class="card-header">

                        <h4>จำนวนผู้เข้าชม</h4>

                    </div>

                    <div class="card-body">

                        <div>

                            <center>

                                <script type='text/javascript' src='https://www.siamecohost.com/member/gcounter/graphcount.php?page=2898944.com&style=02&maxdigits=7 = 7 digits (9999999)'>

                                </script>

                                <h5 class="pt-3">เริ่ม 1 ธันวาคม 2562</h5>

                            </center>

                        </div>

                    </div>



                </div>

                <br>

                <div class="card text-center shadow ">



                    <div class="card-body">

                        <div style="">

                            <a href="https://qrco.de/bbFwxe" target="_blank"><img src="assets/images/qrcode.png" width="80%" class="card-img-top"></a>

                        </div>

                    </div>



                </div>



            </div>



            <div class="col-md-9">

                <section class="shadow">



                    <?php

                    if (empty($_GET['pageto'])) {

                        include("home.php");
                    } else {

                        switch ($_GET['pageto']) {

                            case "activities":

                                include("activities.php");

                                break;

                            case "activities-detail":

                                include("activities-detail.php");

                                break;

                            case "blog":

                                include("blog.php");

                                break;

                            case "blog-detail":

                                include("blog-detail.php");

                                break;

                            default:

                                include("home.php");
                        }
                    }

                    ?>



                </section>



            </div>

        </div>



    </div>





    <br><br>

    <br><br>



    <?php include_once('includes/footer.php') ?>



    <script src="node_modules/jquery/dist/jquery.min.js"></script>

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>

    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>


    <script src="assets/js/main.js"></script>



    <div class="fb-customerchat" page_id="625868027892040"></div>

    <script>
        window.fbAsyncInit = function() {

            FB.init({

                appID: '2428559387466517',

                autoLogAppEvents: true,

                xfbml: true,

                version: 'v3.0',

            });

        };



        (function(d, s, id) {

            var js, fjs = d.getElementsByTagName(s)[0];

            if (d.getElementById(id)) return;

            js = d.createElement(s);

            js.id = id;

            js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";

            fjs.parentNode.insertBefore(js, fjs);

        }(document, 'script', 'facebook-jssdk'));
    </script>

</body>



</html>