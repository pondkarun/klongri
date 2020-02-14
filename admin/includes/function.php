<?php
define('LINE_API', "https://notify-api.line.me/api/notify");
function notify_message($message, $token)
{
    $queryData = array('message' => $message);
    $queryData = http_build_query($queryData, '', '&');
    $headerOptions = array(
        'http' => array(
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                . "Authorization: Bearer " . $token . "\r\n"
                . "Content-Length: " . strlen($queryData) . "\r\n",
            'content' => $queryData
        ),
    );
    $context = stream_context_create($headerOptions);
    $result = @file_get_contents(LINE_API, FALSE, $context);
    //$res = json_decode($result);
    //  return $res;
}

//วันไทย
function DateThai($day)
{
    $Year = date("Y", strtotime($day)) + 543;
    $Month = date("n", strtotime($day));
    $Day = date("j", strtotime($day));
    $MonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    $MonthThai = $MonthCut[$Month];
    return "$Day $MonthThai พ.ศ. $Year";
}

//เดือนไทยไทย
function MonthThai($month)
{

    $Month = date("n");
    $MonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    $MonthThai = $MonthCut[$Month];
    return "$MonthThai";
}

function TelFormat($mobile)
{
    $minus_sign = "-";   // กำหนดเครื่องหมาย 
    $part1 = substr($mobile, 0, -7);  // เริ่มจากซ้ายตัวที่ 1 ( 0 ) ตัดทิ้งขวาทิ้ง 7 ตัวอักษร ได้ 085 
    $part2 = substr($mobile, 3, -4);  // เริ่มจากซ้าย ตัวที่ 4 (9) ตัดทิ้งขวาทิ้ง 3 ตัวอักษร ได้ 9490 
    $part3 = substr($mobile, 6); // เริ่มจากซ้าย ตัวที่ 8 (8) ไม่ตัดขวาทิ้ง ได้ 862  
    $a = $part1 . $minus_sign . $part2 . $minus_sign . $part3;
    return $a;
}

function difftime($time1, $time2)
{
    $date1 = strtotime("$time1");
    $date2 = strtotime("$time2");
    $interval = $date2 - $date1;
    return $interval / 60;
}

function page_navi($total_item, $cur_page, $per_page = 10, $query_str = "", $min_page = 5)
{

    $total_page = ceil($total_item / $per_page);
    $cur_page = (isset($cur_page)) ? $cur_page : 1;
    $diff_page = NULL;
    if ($cur_page > $min_page) {
        $diff_page = $total_page - $cur_page;
    }
    $limit_page = $min_page;
    $f_num_page = ($cur_page <= $min_page) ? 1 : (floor($cur_page / $min_page) * $min_page) + 1;
    if ($diff_page > $min_page) {
        $limit_page = ($min_page + $f_num_page) - 1;
    } else {
        if (isset($diff_page)) {
            $limit_page = $total_page;
        } else {
            $limit_page = $min_page;
        }
    }
    $show_page = ($total_page <= $min_page) ? $total_page : $limit_page;
    $l_num_page = 1;
    $prev_page = $cur_page - 1;
    $next_page = $cur_page + 1;
    $temp_query_str = $query_str;
    $query_str = "";
    if ($temp_query_str && is_array($temp_query_str) && count($temp_query_str) > 0) {
        array_pop($temp_query_str);
        $query_str = http_build_query($temp_query_str);
        if ($query_str != "") {
            $query_str = "?" . $query_str;
        }
    }
    $mark_char = ($query_str != "") ? "&" : "?";

    echo '<nav>
          <ul class="pagination justify-content-center">
            <li class="page-item">
           <!-- <a class="page-link" href="' . $query_str . $mark_char . 'page=1&pageto=blog"> หน้าแรก</a> -->
            </li>
            ';
    echo '
            <li class="page-item ' . (($cur_page == 1) ? "disabled" : "") . '">
              <a class="page-link"  href="' . $query_str . $mark_char . 'page=' . $prev_page . '&pageto=blog"> ย้อนหลัง</a> 
            </li> 
        ';
    for ($i = $f_num_page; $i <= $show_page; $i++) {
        echo '     
            <li class="page-item ' . (($i == $cur_page) ? "active" : "") . '"> 
              <a class="page-link" href="' . $query_str . $mark_char . 'page=' . $i . '&pageto=blog"> ' . $i . ' </a> 
            </li>     
        ';
    }
    echo '
            <li class="page-item ' . (($next_page > $total_page) ? "disabled" : "") . '"> 
                <a class="page-link"  href="' . $query_str . $mark_char . 'page=' . $next_page . '&pageto=blog"> ถัดไป</a> 
            </li>     
        ';
    echo '
            <li class="page-item">
            <!--  <input type="number" class="form-control" min="1" max="' . $total_page . '"
                      style="width:80px;" onClick="this.select()" onchange="window.location=\'' . $query_str . $mark_char . 'page=\'+this.value&pageto=blog"  value="' . $cur_page . '" /> -->
            </li> 
        ';
    echo '
            <li class="page-item"> 
            <!--   <a class="page-link"  href="' . $query_str . $mark_char . 'page=' . $total_page . '&pageto=blog"> หน้าสุดท้าย</a> -->
            </li>     
          </ul>
        </nav>        
        ';
}
