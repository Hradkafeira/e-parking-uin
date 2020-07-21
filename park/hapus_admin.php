<?php
session_start();
include('config.php');
if ($_SESSION['NIP']==$_GET['ID']){
  mysql_query("Delete FROM admin WHERE NIP='$_GET[ID]'");
  echo "<script type='text/javascript'> alert('Akun Anda Terhapus') </script>";
  header("Refresh:0; url=login.php");
}
else{
  mysql_query("Delete FROM admin WHERE NIP='$_GET[ID]'");
  header("Refresh:0; url=ubah_admin.php");
}
?>