<?php 

include "config/koneksi.php";
require 'functions.php';
if ( isset($_POST["submit"]) ) {
	if( tambah($_POST) > 0 ) { 
		echo "
		<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href = 'cekongkir.php'
			</script>
			";
	} else  {
		echo mysqli_error($conn);
		echo "
			<script>
			alert('Data Gagal  Ditambahkan');
			document.location.href = 'cekongkir.php'
		</script>
			";
	}
	 }
?>
 <!DOCTYPE html>
<html>
<head>
	<title>Tambah Data kota</title>
</head>
<body>
	<h1>Tambah Data Buku</h1>
	
	<form action="" method="post">
		<ul>
			<li>
				<label for="kota">Nama Kota</label>
				<input type="text" name="kota" id="kota"
				required>
			</li>
			<li>
				<label for="tarif">Tarif :</label>
				<input type="text" name="tarif" id="tarif"
				required>
			</li>
			
			
			<li>
			<button type="submit" name="submit">Tambah Data Kota</button>
			</li>
		</ul>
	</form>
</body>

</html>  