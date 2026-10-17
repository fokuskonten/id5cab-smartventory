<?php
// FokusKonten PHP 8.2 Compatibility Shield
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
ini_set('display_errors', '0');
 
include '../koneksi.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$sql = "SELECT * FROM tb_admin WHERE username = '$user' AND password =  '$pass'";
$login = mysqli_query($koneksi, $sql);
$ketemu = mysqli_num_rows($login);
$b = mysqli_fetch_array($login);

if ($ketemu>0) {
	session_start();
	$_SESSION['idinv'] = $b['id_admin'];
	$_SESSION['userinv'] = $b['username'];
	$_SESSION['passinv'] = $b['password'];
	$_SESSION['namainv'] = $b['nama'];
	$_SESSION['teleponinv'] = $b['telepon'];
	$_SESSION['fotoinv'] = $b['foto'];
	header("location: index.php?m=awal");
}else{
	 echo '<script language="javascript">';
        echo 'alert ("Username/Password ada yang salah, atau akun anda belum Aktif")';
    echo '</script>';
    header("location: login.php");
   ;
}
 

 ?>