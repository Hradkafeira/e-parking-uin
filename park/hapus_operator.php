<?php
$a = $_GET['ID'];
include('config.php');
  mysql_query("Delete FROM operator WHERE NIP='$a'");
  header("Refresh:0; url=daftar_operator.php");
?>