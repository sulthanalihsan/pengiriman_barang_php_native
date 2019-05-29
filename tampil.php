<?php
include "config/koneksi.php";
date_default_timezone_set('Asia/Singapore');
session_start();
?>
<html>
<head>
	<title>Sistem Pengiriman Barang </title>
	<link href="style/form.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/slide.css">
</head>
<body>
	<div id="page">
		<div id="container">

			<div class="judul"><h1>SISTEM PENGIRIMAN BARANG</h1></div>
			<div id="header"><p></p></div>
			<div id="cssmenu">
				<ul>
					<?php include "menu.php";?>
					<!-- <li><a href="?page=berita">BERITA</a></li>
					<li><a href="?page=hubungics">HUBUNGI CS</a></li>
					<li><a href="?page=ceknoresi">CEK NO RESI</a></li>
					<li><a href="?page=cekongkoskirim">CEK ONGKOS KIRIM</a></li>
					<li><a href="?page=temukanagen">TEMUKAN AGEN</a></li> -->
				</ul>
			</div>
			<div class="main">
				<div id="kiri">
					<div class="isi">
						<?php include "kiri.php";?>
					</div>
				</div>
				<div id="kanan">
					<div class="isi2">
						<?php
						if(isset($_SESSION["login"])){
							echo "Hallo $_SESSION[username] <a href='?page=logout'>logout</a>";
						}else {
							echo
							"
							<form method='post' action='usermasuk.php'>
							<h7>User Login</h7><hr>
							Email<br>
							<input  type='text' size='30' name='username'><br>
							Password<br>
							<input type='password' size='30'     name='password'><br>
							<input class='submit' type='submit'   name='login'  value='Login'>
							<input class='submit' type='reset'    name='reset'  value='Reset'><br>
							Not yet a Member?<a href='?page=pendaftaran'>RegisterNow</a>
							</form>
							";
						}

						?>


					</div>
				</div>
			</div>
			<div class="bottom">
				<div id="kontak">
					Contact :<br>(120)934-223-235<br>(628)532-252-553
				</div>
				<div id="alamat">
					Alamat :<br>Jl.Lambung Mangkurat<br>Kecamatan banjarmasin Barat<br>Kota Banjarmasin
				</div>
				<div id="kami">
					Tentang Kami :<br>Kami adalah Jasa pengiriman barang <br>keseluruh provinsi dindonesia
				</div>
			</div>
		</div>
		<div id="footer">Copyright@2018Kelompok 5</div>
	</div>
</body>
</html>
