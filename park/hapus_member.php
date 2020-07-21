<?php
session_start();
include('config.php');

mysql_query("Delete FROM member WHERE ID_card='$_GET[ID]'");
mysql_query("Delete FROM kuota_member WHERE ID_card='$_GET[ID]'");
header("Refresh:0; url=daftar_member.php");

?>