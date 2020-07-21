<!DOCTYPE html>
<html lang="en">

<head>
	<title>Operator Masuk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/gb.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
<?php
require "config.php";
$panggil = mysql_query("SELECT * FROM operator WHERE NIP='$_GET[ID]'");
$data = mysql_fetch_array($panggil);

?>

	<div class="bg-img1 size1 flex-w flex-c-m p-t-55 p-b-55 p-l-15 p-r-15"
		style="background-image: url('images/park2.jpg');">
		<div class="wsize1 bor1 bg1 p-t-50 p-b-45 p-l-15 p-r-15 respon1">
			<div class="wrappic1">
				<img src="images/icons/gb.png" alt="LOGO">
			</div>

			<div class="card-body">
				<div class="text-center">
					<div class="m-10">
                        <h2>Ubah Profil</h2>
                    <form action="proses_ubah_profil.php" method="POST">
						<div class="m-10">
							<input class="form-control" type="text" placeholder="NIP" name="NIP" value="<?php echo $data['NIP']; ?>" name="NIP" readonly>
                        </div>
                        <div class="m-10">
							<input class="form-control" type="text" placeholder="Nama" name="Nama" value="<?php echo $data['Nama']; ?>">
                        </div>
			            <div class="m-10">
							<input class="form-control" type="password" id="password" placeholder="password baru" name="password">
                        </div>
                        <div class="m-10">
							<input class="form-control" type="password" placeholder="ulangi password baru" oninput="check(this)">
						</div>
					</div>
				</div>
				<div class="text-center">
					<input type="submit" value="login" class="btn btn-primary fs-16 trans-04">
                </div>
            </form>
            </div>
            <script type='text/javascript'>
                function check(input) {
                    if (input.value != document.getElementById('password').value) {
                    input.setCustomValidity('Kata Sandi dan Ulangi Kata Sandi Anda Tidak Cocok');
                    } 
                else {
                    // input is valid -- reset the error message
                    input.setCustomValidity('');
                    }
                }
            </script>

		</div>
	</div>

	<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script> -->

</body>