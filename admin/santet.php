<?php
error_reporting(0);
set_time_limit(0);

echo '<!DOCTYPE HTML>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
<title>[ SANTET ] [ ONLINE ]</title>
<style>
body{
font-family: Kelly Slab;
background-color: black;
color: white;
}
input[type=text] {
	width: 350px;
	height: 25px;
	color: silver;
	background: black;
	border: 1px dotted red;
	padding: 5px;
	margin-left: 20px;
	text-align: left;
	}
</style>
</head>
<body>
<center>
<h1> - santet online coded by 5quarep4ntz - </h1><br><br>';
        $nama = $_POST['nama'];
        $mel = $_POST['mel'];
echo "<center><form method='post'>
	      <font color='white' size='6px'>
         nama kamu : <br>
        <input type='text' name='nama' placeholder='5quarep4ntz'><br>
         nama yg mau di santet : <br>
        <input type='text' name='mel' placeholder='kontol'><br>
          tipe santet </font><br>
         <select>
         <option value=''>pilih</option>
         <option value=''>isi paku</option>
         <option value=''>copot matane</option>
         <option value=''>ketok kontole</option>
         <option value=''>langsung mati</option>
         </select><br><br>
        <input type='submit' name='santet' value='SANTET' style='margin-top:4px;width:100px;font-family:Kelly Slab;font-size:15;background:black;color:gold;border:2px solid red;border-radius:5px'/>";
        if(isset($_POST['santet'])) {
        echo '
	<center><br><br>
    <br><img border="0" src="https://i.ibb.co/mBDJM91/hantu-pocong.jpg" width="350" height="">
            <br><h1>awokwok goblok........!<h1></center>
<br><br><br>';}
?>