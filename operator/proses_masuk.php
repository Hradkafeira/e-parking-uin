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
    $sql3 = mysql_query ("SELECT tanggal FROM logmotor WHERE ID_card='$a' and tanggal='$tanggal'");
    $TanggalNow=mysql_fetch_assoc($sql3);

	if($tanggal!=$TanggalAkhir){
        if ($TanggalNow['tanggal']!=$tanggal){
            if($kuota['Sisa_kuota'] != 0) {		
                $simpan1 = mysql_query("INSERT INTO logmotor VALUES('$a','$tanggal',1,0)");
                $simpan2 = mysql_query("INSERT INTO aktivitas values('$tanggal','$jam','$a','masuk',$_SESSION[NIP])");
                if($simpan1 && $simpan2){
                    header("Refresh:0; url=index.php");
                    echo "<script type='text/javascript'> alert('Selamat Masuk') </script>";
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
            $simpan1 = mysql_query("UPDATE logmotor SET jumlahIn=(SELECT(jumlahIn+1))WHERE ID_card='$a' and tanggal='$tanggal'");
            $simpan2 = mysql_query("INSERT INTO aktivitas values('$tanggal','$jam','$a','masuk',$_SESSION[NIP])");
            if($simpan1 && $simpan2){
                header("Refresh:0; url=index.php");
                echo "<script type='text/javascript'> alert('Selamat Masuk Lagi') </script>";
                }
            else{
                // header("Refresh:0; url=isi_kuota.php");
                // echo "<script type='text/javascript'> alert('gagal masuk lagi') </script>";
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