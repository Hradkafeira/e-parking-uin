<?php
include("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$NIP =$_POST['NIP'];
	$pass =$_POST['password'];
	
	$sql = "SELECT NIP from operator WHERE NIP = '$NIP' and password = '$pass'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	
	$count = mysql_num_rows($result);
	
	if ($count == 1){
		session_start();
		$_SESSION['NIP'] = $NIP;		
		echo "<meta http-equiv='refresh' content='0;./index.php' />";
		
	}else{
		echo '<script language="javascript">alert("Nama User dan Kata sandi salah") </script>';
		echo "<meta http-equiv='refresh' content='0;login.php' />";
	}
	
}
?>