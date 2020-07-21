<?php
	require "config.php";
	
	$ID = $_POST['ID'];
	$nama = $_POST['Nama'];
	$NIM = $_POST['NIM'];
	$tanggal = date ("d-m-y");
	
    $perintah = "UPDATE member SET Nama='$nama', NIM='$NIM' WHERE ID_card='$ID'";
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