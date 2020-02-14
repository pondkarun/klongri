<?php
$sql = "SELECT * FROM klongri  WHERE id=1 ";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);
extract($row);
?>
<div class="p-2">

    <?php echo $row['home']; ?>

</div>