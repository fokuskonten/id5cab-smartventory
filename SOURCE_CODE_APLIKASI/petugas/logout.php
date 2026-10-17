<?php
// FokusKonten PHP 8.2 Compatibility Shield
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
ini_set('display_errors', '0');

session_start();
unset($_SESSION['idinv2']);
unset($_SESSION['userinv2']);
unset($_SESSION['passinv2']);
unset($_SESSION['namainv2']);
unset($_SESSION['teleponinv2']);


echo "<script>window.location='../'</script>";
//session_destroy();

?>
