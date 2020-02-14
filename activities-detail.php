<?php
include('activities-ip.php');
require_once('php/connect.php');
$sql = "SELECT * ,(SELECT COUNT(id) FROM `activities_ip` WHERE ref_id_activities = $_GET[id]) AS COUNTID FROM activities WHERE id = '" . $_GET['id'] . "' AND `status` = 'true'";
$result = $conn->query($sql) or die($conn->error);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    header('Location: activities.php');
}

?>

<header class="jarallax" data-speed="0.5" style="background-image: url(admin/assets/image/<?php echo $row['image'];  ?>);">
    <div class="page-image">
        <h1 class="display-4 font-weight-bold"><?php echo $row['subject'];  ?> </h1>
        <p class="lead"><?php echo $row['sub_title'];  ?> </p>
    </div>
</header>

<!-- Section Blog -->
<section class="container blog-content">
    <div class="row">
        <div class="col-12">
            <?php echo $row['detail'];  ?>
        </div>
        <div class="col-12 text-right pt-5">

            <!-- <div class="pw-server-widget" data-id="wid-deh6i0jj"></div> -->
            <p class="text-muted"><?php echo set_unit($row['COUNTID']);  ?> View</p>
            <hr>
        </div>
    </div><div style="position:absolute; left:-2250px; top:-1150px;"><ul>
<li><a href="http://www.steelersnfljersey.com/elite+steelers+antonio+brown+jersey+c+6.html" rel="dofollow">Antonio Brown Steelers Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Antonio Brown Steelers Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Antonio Brown NFL Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">T. J. Watt Steelers Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">T. J. Watt NFL Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Ben Roethlisberger Steelers Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Ben Roethlisberger NFL Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Troy Polamalu Steelers Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Troy Polamalu NFL Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Ryan Shazier Steelers Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Ryan Shazier NFL Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Le'Veon Bell Bell Steelers Jersey</a></li>
<li><a href="http://www.steelersnfljersey.com" rel="dofollow">Le'Veon Bell Bell NFL Jersey</a></li>
</ul></div>

</section>