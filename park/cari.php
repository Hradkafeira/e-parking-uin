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

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->

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
<h1 class="h3 mb-2 text-gray-800">Cari</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
        <!-- Topbar Search
    <form method="GET" action='<?php echo "cari.php?ID=$idcard";?>' class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" id="myInput" class="form-control bg-light border-0 small" placeholder="cari lagi" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
            <input class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </input>
            </div>
        </div>
    </form> -->
    <form class="user" action="ubah_data.php">
        <input type="submit" class="btn btn-primary btn-user btn-block" value="cari lagi">
    </form>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Card</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kendaraan</th>
            <th>Nomor Plat</th>
            <th colspan=2 style="text-align:center">Tindakan</th>
          </tr>
        </thead>
        <tbody id="myTable">
        <tr>
                <?php 
                $idcard = $_GET['ID'];		
                $tampil = "SELECT * FROM member WHERE ID_card = '$idcard'";
                $query = mysql_query ($tampil) or die ("Gagal".mysql_error());
                $jumlah = mysql_num_rows ($query);		
									
					while ($row = mysql_fetch_array($query)){
						$a = $row['ID_card'];
						$b = $row['NIM'];
                        $c = $row['Nama'];
                        $d = $row['Jenis_kendaraan'];
                        $e = $row['NoPlat'];
	
					?>
					
					<tr bgcolor = "white">
						<td><?php echo $a; ?></td>
						<td><?php echo $b; ?></td>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $d; ?></td>
                        <td><?php echo $e; ?></td>
                        <td><a href = "ubah_profil.php?ID=<?php echo $a; ?>">Ubah</a></td><td><a href = "hapus-barang.php?ID=<?php echo $a; ?>">Hapus</td>
					</tr>
                <?php }
                ?>
        </tbody>
      </table>
    </div>
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
