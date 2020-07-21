<?php
	session_start();
	require "config.php";
	$a = $_POST['ID'];
	ini_set('date.timezone', 'Asia/Jakarta');
    $tanggal = date ("Y-m-d");    	
    $jam = date("H:i:s");

	$sql = mysql_query ("SELECT * FROM kuota_member WHERE ID_card = '$a'");
	$kuota=mysql_fetch_assoc($sql);
	$sql2 = mysql_query ("SELECT DATE_ADD(tanggal, INTERVAL 30 DAY) FROM kuota_member WHERE ID_card = '$a'");
    $TanggalAkhir=mysql_fetch_assoc($sql2);
    $sql3 = mysql_query ("SELECT jumlahOut FROM logmotor WHERE ID_card='$a' and tanggal='$tanggal'");
    $TanggalNow=mysql_fetch_assoc($sql3);

	if($tanggal!=$TanggalAkhir){
        if ($TanggalNow['jumlahOut']==0){
            if($kuota['Sisa_kuota'] != 0) {		
                $simpan1 = mysql_query("UPDATE kuota_member SET Pemakaian=(SELECT(Pemakaian+1))WHERE ID_card='$a'");
                $simpan2 =mysql_query("UPDATE kuota_member SET Sisa_kuota=(SELECT(Kuota-Pemakaian))WHERE ID_card='$a'");
                $simpan3 = mysql_query("UPDATE logmotor SET jumlahOut=jumlahIn WHERE ID_card='$a' and tanggal='$tanggal'");
                $simpan4 = mysql_query("INSERT INTO aktivitas values('$tanggal','$jam','$a','keluar',$_SESSION[NIP])");
                if($simpan1 && $simpan2 && $simpan3 && $simpan4){
                    header("Refresh:0; url=index.php");
                    echo "<script type='text/javascript'> alert('Selamat Tinggal') </script>";
                    }
                else{
                    header("Refresh:0; url=index.php");
                    echo "<script type='text/javascript'> alert('gagal masuk') </script>";
                }
            }
            else{
                header("Refresh:0; url=index.php");
                echo "<script type='text/javascript'> alert('Kuota anda sudah habis!') </script>";
            }
        }
        else{
            $simpan1 = mysql_query("UPDATE logmotor SET jumlahOut=jumlahIn WHERE ID_card='$a' and tanggal='$tanggal'");
            $simpan2 = mysql_query("INSERT INTO aktivitas values('$tanggal','$jam','$a','keluar',$_SESSION[NIP])");
            if($simpan1 && $simpan2){
                header("Refresh:0; url=index.php");
                echo "<script type='text/javascript'> alert('Selamat Tinggal Lagi') </script>";
                }
            else{
                header("Refresh:0; url=isi_kuota.php");
                echo "<script type='text/javascript'> alert('gagal masuk lagi') </script>";
            }

        }
    }
    

	else{
		$simpan1 = mysql_query("UPDATE kuota_member SET tanggal='$tanggal',Pemakaian=0, Kuota=0,Sisa_kuota=0 WHERE ID_card='$a'");
		if($simpan1){
			header("Refresh:0; url=index.php");
			echo "<script type='text/javascript'> alert('Batas Telah Tanggal Tercapai!') </script>";
			}
		else{
			header("Refresh:0; url=isi_kuota.php");
			echo "<script type='text/javascript'> alert('Salah Boy') </script>";
		}
	}

?>