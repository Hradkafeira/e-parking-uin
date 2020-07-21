<?php
require "config.php";
mysql_query("UPDATE annual SET total=(SELECT sum(biaya) from Topup)");
header("Refresh:0; url=index.php");
// echo "<script type='text/javascript'> alert('Top Up Gagal') </script>";
?>