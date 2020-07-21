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
        <h1 class="h3 mb-2 text-gray-800">Registrasi</h1>

<!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
            <form action="proses_register.php" enctype="multipart/form-data" method = "POST" class="user">
                <div class="form-group">
                  <input type="" class="form-control form-control-user" id="exampleInputEmail" placeholder="NIM" required
                 name="NIM">
                </div>
                <div class="form-group">
                  <input type="" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama" required
                 name="Nama">
                </div>
                <div class="form-group">
                  <input type="" class="form-control form-control-user" id="exampleInputEmail" placeholder="Motor" readonly>
                </div>
                <div class="form-group">
                  <input type="" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nomor Plat" required
                name="NoPlat">
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Daftar">
              </form>

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

 <!-- Logout Modal-->
 <div class="modal fade" id="saldoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sudah Yakin?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Periksa Kembali Data Anda</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="login.html">Lanjutkan</a>
        </div>
      </div>
    </div>
  </div>
</body>


</html>
