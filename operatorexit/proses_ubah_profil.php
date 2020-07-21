<?php
	require "config.php";
	
	$NIP = $_POST['NIP'];
	$nama = $_POST['Nama'];
    $pwd = $_POST['password'];
    $tanggal = date ("d-m-y");
	
    $perintah = "UPDATE operator SET Nama='$nama', Password='$pwd' WHERE NIP='$NIP'";
    $simpan = mysql_query($perintah);
            if($simpan){
                    header("Refresh:0; url=index.php");
                    echo "<script type='text/javascript'> alert('Barang Telah Terubah') </script>";
            }
            else{
                    header("Refresh:0; url=ubah_profil.php");
                    echo "<script type='text/javascript'> alert('Barang Gagal Terubah') </script>";
            }

	
	
?>