<?php
	require "config.php";
	$a = $_POST['NIM'];
	$b = $_POST['Nama'];
	$c = $_POST['NoPlat'];
	ini_set('date.timezone', 'Asia/Jakarta');
	$tanggal = date ("Y-m-d");
	
	$sql = mysql_query ("select * from member where NoPlat = '$c'");
	$row = mysql_num_rows ($sql);
	$sql1 = mysql_query ("select * from member where NIM = '$a'");
	$row1 = mysql_num_rows ($sql1);
	
	if($row1 == 1 & $row == 1) {		
		header("Refresh:0; url=register.php");
		echo "<script type='text/javascript'> alert('NIM dan Nomor Plat sudah ada ,Ulangi lagi') </script>";
	}
	else if($row == 1) {		
		header("Refresh:0; url=register.php");
		echo "<script type='text/javascript'> alert('Nomor Plat sudah ada ,Ulangi lagi') </script>";
	}
	else if($row1 == 1) {		
		header("Refresh:0; url=register.php");
		echo "<script type='text/javascript'> alert('NIM sudah ada ,Ulangi lagi') </script>";
	}
	else{
        $simpan1 = mysql_query("insert into member values('','$a','$b','motor','$c')");
        $simpan2 = mysql_query("insert into kuota_member values('','$tanggal','0','0','0','0')");        
		if($simpan1&&$simpan2){
			header("Refresh:0; url=index.php");
			echo "<script type='text/javascript'> alert('Pengguna Telah Tersimpan') </script>";
			}
		else{
			header("Refresh:0; url=register.php");
			echo "<script type='text/javascript'> alert('Pengguna Gagal Tersimpan') </script>";
		}
	}
?>