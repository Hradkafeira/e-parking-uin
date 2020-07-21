<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
	if(empty($_SESSION['NIP'])){
		echo "<script>alert('Anda belum mempunyai hak akses.'); window.location = 'login.php'</script>";
	}

?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UIN JKT Parking - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php
	include "sidebar.php";
      include "topbar.php";
      include "config.php";
  ?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Member</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID_card</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kendaraan</th>
            <th>Plat Nomor</th>
            <th>Sisa_kuota</th>
            <th colspan=2 style="text-align:center">Tindakan</th>
          </tr>
        </thead>
        <tbody>
        <tr>
				<?php 
					
					
					$batas = 10;
					$pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";
 
					if(empty($pg)) {
						$posisi = 0;
						$pg = 1;
					} else {
						$posisi = ( $pg - 1 ) * $batas;
					}
					
					$tampil = "select member.ID_card,NIM,Nama,Jenis_kendaraan,NoPlat,Sisa_kuota FROM member INNER JOIN kuota_member ON member.ID_card=kuota_member.ID_card LIMIT $posisi, $batas";
					$query = mysql_query ($tampil) or die ("Gagal".mysql_error());
					$jumlah = mysql_num_rows ($query);
					
					while ($row = mysql_fetch_array($query)){
						$a = $row['ID_card'];
						$b = $row['NIM'];
            $c = $row['Nama'];
            $d = $row['Jenis_kendaraan'];
            $e = $row['NoPlat'];
            $f = $row['Sisa_kuota'];
					?>
					
					<tr bgcolor = "white">
						<td><?php echo $a; ?></td>
						<td><?php echo $b; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><?php echo $f; ?></td>
                        <td><a href = "ubah_profil.php?ID=<?php echo $a; ?>">Ubah</a></td><td><a href = "hapus_member.php?ID=<?php echo $a; ?>">Hapus</td>
					</tr>
                <?php }
                
					// membuat halaman
			//hitung jumlah barang
			$jml_data = mysql_num_rows(mysql_query("SELECT * FROM member"));
			// hitung jumlah halaman
			$JmlHalaman = ceil($jml_data/$batas);
			
			//navigasi kesebelumnya
			if ( $pg > 1 ) {
				$link = $pg-1;
				$prev = "<a href='?pg=$link'>Sebelumnya </a>";
			} else {
				$prev = "Sebelumnya ";
			}
			
			//Navigasi nomor
			$nmr = '';
			for ( $i = 1; $i<= $JmlHalaman; $i++ ){
 
				if ( $i == $pg ) {
					$nmr .= $i . " ";
				} else {
					$nmr .= "<a href='?pg=$i'>$i</a> ";
				}
			}
			
			//Navigasi ke selanjutnya
			if ( $pg < $JmlHalaman ) {
				$link = $pg + 1;
				$next = " <a href='?pg=$link'>Selanjutnya</a>";
			} else {
				$next = " Selanjutnya";
			}
			

                ?>
        </tbody>
      </table>
    </div>
    <center><?php echo $prev." | ".$nmr . $next; ?></center>
  </div>
</div>

      </div>
      <!-- End of Main Content -->

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
    <?php 
    include "footer.php" ;
    include "modal.php";
    ?>

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
