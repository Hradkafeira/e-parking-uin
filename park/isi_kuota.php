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
        <h1 class="h3 mb-2 text-gray-800">Isi Kuota</h1>

<!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
            <form class="user" action="proses_isi_kuota.php" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                      ID Card<input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" name="ID" placeholder="Masukkan ID Card">
                    </div>
                    <div class="form-group">
                      Kuota<input type="text" class="form-control form-control-user" id="exampleInputPassword" readonly placeholder="1 Bulan">
                    </div>
                    <div class="form-group">
                      harga<input type="text" class="form-control form-control-user" id="exampleInputPassword" readonly placeholder="Rp 20.000,00">
                    </div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" value="isi Kuota">
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

</body>


</html>
