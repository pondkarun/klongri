<?php
error_reporting(E_ALL); // เปิด Error ทั้งหมด
//error_reporting(0); // ปิด error ในกรณีที่เราต้องการแสดง error ของเราเอง
//เชื่อมต่อ Database
$conn = new mysqli('localhost', 'smomscic_klongri', 'Jj*5cQ6)ub5VK1', 'smomscic_klongri');
// ตั้งค่าภาษา ให้รองรับภาษาไทย
$conn->set_charset('utf8');
if ($conn->connect_errno) { // เช็คว่ามีค่า error code หรือเปล่า
    echo "Connect Error :" . $conn->connect_error; // แสดงผล error message
    exit(); // จบการทำงานทุกอย่าง (โปรแกรมปิดตัวลง)
}
// ถ้าไม่มี error ให้ปล่อยผ่านไม่ต้องแสดงอะไร แต่เอาแค่ค่าไปใช้งาน
$base_path_blog = 'assets/images/blog/';
