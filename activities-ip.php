<?php
include('admin/includes/condb.php');
function datetime($time)
{
    $datetime = $time;
    $exp = explode(" ", $datetime);
    $t = explode(":", $exp[1]);
    $d = explode("-", $exp[0]);
    $timestamp = mktime($t[0], $t[1], $t[2], $d[1], $d[2], $d[0]);
    return $timestamp;
}

function set_unit($num)
{

    $num = intval($num);
    if ($num > 900) {
        $new_num = $num / 1000000;
        if ($new_num >= 1) {
            $new_num = $new_num . 'M';
        } else {
            $new_num = $num / 1000 . 'k';
        }
        return $new_num;
    } else {
        return $num;
    }
}

$ref_id_activities = $_GET['id'];
$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];
$HTTP_USER_AGENT = $_SERVER["HTTP_USER_AGENT"];

$dateNow = date('Y-m-d H:i:s');

$sql = "
SELECT MAX(DATETIME) AS maxDate FROM activities_ip 
WHERE ref_id_activities = $ref_id_activities
AND REMOTE_ADDR = '$REMOTE_ADDR'
AND HTTP_USER_AGENT = '$HTTP_USER_AGENT'";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);
extract($row);

$maxDate = $row['maxDate'];

$a = ($maxDate != NULL) ? datetime($maxDate) : 0;
$b = datetime($dateNow);
$c = $b - $a; // มากกว่าเท่ากับ 600 = 10 นาที

if ($c >= 600) {

    $sql = "INSERT INTO activities_ip
    (
    ref_id_activities,
    REMOTE_ADDR,
    HTTP_USER_AGENT
    )
    VALUES
    (
    '$ref_id_activities',
    '$REMOTE_ADDR',
    '$HTTP_USER_AGENT'
    )";
    $result = mysqli_query($condb, $sql) or die("Error in query: $sql" . mysqli_error());
}



//exit;
