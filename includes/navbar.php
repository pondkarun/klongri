<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php"); ?>
<style>
    .nav-link {
        font-size: 20px;
    }

    .logo-nav {
        position: absolute;
        padding-top: 30px;
        padding-left: 19px;
        font-size: 30px;
        color: #00d412;
    }

    .bg-alpha {
        background: rgb(0, 0, 0);
    }

    .index-img {
        position: absolute;
        top: -5%;
        width: 26%;
        right: 37%;
    }

    .box {

        width: 100%;
        padding: 25px;
        border: 25px solid navy;
        margin: 25px;

    }

    /* .carousel-control-prev {
        top: -23% !important;
    }

    .carousel-control-next {
        top: -23% !important;
    }

    .carousel-indicators {
        top: 73% !important;
    } */
</style>

<nav id="navbar" class="navbar navbar-expand-lg  navbar-dark bg-alpha">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <!-- <div>โรงเรียนชาวนาบ้านคลองรี่</div> -->
            <img src="assets/images/vector.png" height="100" width="" class="d-inline-block align-top text-center" style="padding-left: 0px;">
            <span class="logo-nav">โรงเรียนชาวนาบ้านคลองรี่</span>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarKey">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item <?php echo $file_name == 'index' ? 'active' : '' ?>">
                    <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo $file_name == 'about' ? 'active' : '' ?>">
                    <a class="nav-link" href="about.php">เกี่ยวกับ</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active' : '' ?>">
                    <a class="nav-link" href="blog.php">บทความ</a>
                </li>

            </ul>
        </div>
    </div>
</nav>