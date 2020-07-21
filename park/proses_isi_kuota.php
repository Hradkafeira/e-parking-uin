<?php
	require "config.php";
	$a = $_POST['ID'];
	ini_set('date.timezone', 'Asia/Jakarta');
	$tanggal = date ("Y-m-d");
	
	$sql = mysql_query ("SELECT * FROM kuota_member WHERE ID_card = '$a'");
	$kuota=mysql_fetch_assoc($sql);
	$sql2 = mysql_query ("SELECT DATE_ADD(tanggal, INTERVAL 30 DAY) FROM kuota_member WHERE ID_card = '$a'");
	$TanggalAkhir=mysql_fetch_assoc($sql2);
	$sql2 = mysql_query ("SELECT tanggal FROM logmotor WHERE ID_card = '$a'");
	$cekTanggal=mysql_fetch_assoc($sql2);


	if($kuota['tanggal']!=$TanggalAkhir){
		if($kuota['Sisa_kuota'] != 0) {		
			header("Refresh:0; url=isi_kuota.php");
			echo "<script type='text/javascript'> alert('Kuota Bulan ini Masih ADA!') </script>";
		}
		else{
			$simpan1 = mysql_query("UPDATE kuota_member SET tanggal='$tanggal', Kuota=30,Sisa_kuota=30 WHERE ID_card='$a'");
			$simpan2 = mysql_query("UPDATE kuota_member SET RiwayatTopUp =(SELECT(RiwayatTopUp + 1))WHERE ID_card='$a'");
			$simpan3 = mysql_query("INSERT INTO Topup VALUES('$tanggal','$a',20000,30)");
			if($simpan1 && $simpan2 && $simpan3){
				header("Refresh:0; url=index.php");
				echo "<script type='text/javascript'> alert('Top Up Berhasil') </script>";
				}
			else{
				header("Refresh:0; url=isi_kuota.php");
				echo "<script type='text/javascript'> alert('Top Up Gagal') </script>";
			}
		}
	}
	else{
		$simpan1 = mysql_query("UPDATE kuota_member SET tanggal='$tanggal',Pemakaian=0, Kuota=0,Sisa_kuota=0 WHERE ID_card='$a'");
		if($simpan1){
			header("Refresh:0; url=index.php");
			echo "<script type='text/javascript'> alert('Batas Tanggal Telah Tercapai!') </script>";
			}
		else{
			header("Refresh:0; url=isi_kuota.php");
			echo "<script type='text/javascript'> alert('Salah Boy') </script>";
		}
	}

?>