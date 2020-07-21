<?php
	require "config.php";
	$a = $_POST['NIP'];
	$b = $_POST['Nama'];
    $c = $_POST['pwd'];
	
	$sql = mysql_query ("select * from operator where NIP = '$a'");
	$row = mysql_num_rows ($sql);
	
	if($row == 1) {		
		header("Refresh:0; url=tambah_operator.php");
		echo "<script type='text/javascript'> alert('NIP sudah ada ,Ulangi lagi') </script>";
	}
	else{
        $simpan1 = mysql_query("insert into operator values('$a','$b','$c')");
		if($simpan1){
			header("Refresh:0; url=index.php");
			echo "<script type='text/javascript'> alert('Pengguna Telah Tersimpan') </script>";
			}
		else{
			header("Refresh:0; url=tambah_operator.php");
			echo "<script type='text/javascript'> alert('Pengguna Gagal Tersimpan') </script>";
		}
	}
?>