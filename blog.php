<div class="p-2 pt-4">



    <section class="position-relative py-5 jarallax bg-black" data-speed="0.5" style="background-image: url(assets/images/klongri01.jpg);">

        <div class="container">

            <div class="row">



                <div class="col-12 text-center ">

                    <img src="assets/images/vector.png" class="img-fluid pt-5 pb-4" width="250" alt="">

                    <h1 class="text-white display-4 font-weight-bold">บทความ</h1>

                </div>

            </div>

        </div>

    </section>

    <hr>

    <div class="col-12">

        <div class="row">

            <?php

            $num = 0;

            $sql = "SELECT * FROM `articles` WHERE `status` = 'true'";

            $result = mysqli_query($condb, $sql);

            $total = mysqli_num_rows($result);



            $e_page = 4; // กำหนด จำนวนรายการที่แสดงในแต่ละหน้า   

            $step_num = 0;

            if (!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page'] == 1)) {

                $_GET['page'] = 1;

                $step_num = 0;

                $s_page = 0;
            } else {

                $s_page = $_GET['page'] - 1;

                $step_num = $_GET['page'] - 1;

                $s_page = $s_page * $e_page;
            }

            $sql .= " ORDER BY id DESC LIMIT " . $s_page . ",$e_page";

            $result = mysqli_query($condb, $sql);

            while ($row = mysqli_fetch_array($result)) { ?>



                <section class="col-12 col-sm-12 col-md-6  p-2">

                    <div class="card h-100">

                        <a href="index.php?id=<?php echo $row['id'] ?>&pageto=blog-detail" class="warpper-card-img">

                            <img class="card-img-top" src="admin/assets/image/<?php echo $row['image'] ?>" alt="Coding">

                        </a>

                        <div class="card-body">

                            <h5 class="card-title"><?php echo $row['subject'] ?></h5>

                            <p class="card-text"><?php echo $row['sub_title'] ?></p>

                        </div>

                        <div class="p-3">

                            <a href="index.php?id=<?php echo $row['id'] ?>&pageto=blog-detail" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>

                        </div>

                    </div>

                </section>



            <?php } ?>



        </div>

        <div class="pt-5">

            <?php

            page_navi($total, (isset($_GET['page'])) ? $_GET['page'] : 1, $e_page);

            ?>

        </div>

    </div>

</div>