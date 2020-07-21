<?php
session_start();
ob_start();

session_destroy();
echo "<meta http-equiv='refresh' content='0;login.php' />";

?>