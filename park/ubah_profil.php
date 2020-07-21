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
        $panggil = mysql_query("SELECT * FROM member WHERE ID_card='$_GET[ID]'");
        $data = mysql_fetch_array($panggil);
    ?>
<!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ubah Profil</h1>

<!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
            <form class="user" method="POST" action="proses_ubah_profil.php">
                <div class="form-group">
                  <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" placeholder="NIM"
                  value="<?php echo $data['ID_card']; ?>" name="ID">
                </div>
                <div class="form-group">
                  <input type="" class="form-control form-control-user" id="exampleInputEmail" placeholder="NIM"
                  value="<?php echo $data['NIM']; ?>" name="NIM">
                </div>
                <div class="form-group">
                  <input type="" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama"
                  value="<?php echo $data['Nama']; ?>" name="Nama">
                </div>
                <div class="form-group">
                  <input type="" class="form-control form-control-user" id="exampleInputEmail" placeholder="Motor" readonly>
                </div>
                <div class="form-group">
                  <input type="" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nomor Plat"
                  value="<?php echo $data['NoPlat']; ?>" readonly>
                </div>

                <input type="submit" class="btn btn-primary btn-user btn-block" value="ubah">
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
