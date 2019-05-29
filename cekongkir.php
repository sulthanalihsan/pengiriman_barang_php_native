<?php include "config/koneksi.php"; ?>


<html>
<head><title>Form Pendaftaran</title></head>
<body>
	<table  border="4" bgcolor="white" align="center" height="500" width="400" cellpadding="20">
		<form method="post" action="#">
			<tr>
				<td>
					<center><b><font color="black" size="5"> CEK ONGKOS KIRIM </font></b><br><br>


					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kota Asal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kota Tujuan</p>
					<select name="Pengirim">
						<!-- <option value="0">-PILIH KOTA PENGIRIM-</option> -->
						<option value="1">BANJARMASIN</option>
					</select>

					<?php

					$selected=array();
					for($n=0;$n<=12;$n++){
						$selected[$n] = '';
					}

					if(isset($_POST['kota_tujuan'])){
						$perintah2=$mysqli->query("select id_ongkir from ongkir where kota_tujuan = '$_POST[kota_tujuan]'");
						while($data2=mysqli_fetch_array($perintah2))
						$dataselect=$data2['id_ongkir']-1;
						$selected[$dataselect] = "selected";
					}
					?>
					<select name='kota_tujuan' class="form" style='margin-left:-4;'>
						<option value="0">-PILIH KOTA PENERIMA-</option>
						<?php
						$perintah=$mysqli->query("select * from ongkir");
						$i=0;
						while($data=mysqli_fetch_array($perintah)){
							echo "<option $selected[$i] value='$data[kota_tujuan]'>$data[kota_tujuan]</option>";
							$i++;
						}
						?>
					</select>
</center>
					<br><br>
					<center><input name="submit" value="Cek Ongkir" style="background-color: white; height: 20; width: 100;"type="submit"></center>
				</form>
				<br><br>

				<?php


				if(isset($_POST['submit'])) {
					$perintah = $mysqli->query("select * from ongkir where kota_tujuan='$_POST[kota_tujuan]'");
					echo "<center><input value='Rp.";

					while($dataongkir=mysqli_fetch_array($perintah)) {

						echo "$dataongkir[tarif]";
						echo "$dataongkir[Status]";


					}
					echo "' type='text' style='text-align:center;'name='nomor' size='46' placeholder='Biaya Ongkir' readonly></center> <br><br>";
				}


				?>
				<!-- <input value="$dataongkir[tarif]" type="text" name="nomor" size="46" placeholder="Biaya Ongkir"> <br><br>
			-->
		</td>
	</tr>

</table>
</body>
</html>
