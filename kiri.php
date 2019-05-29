<?php
include "config/koneksi.php";
@$picik=$_GET['page'];

if($picik=='beranda'){
	include "beranda.php";
}
if($picik=='hubungics'){
	include "hubungics.php";
}
if($picik=='ceknoresi'){
	include "ceknoresi.php";
}
if($picik=='cekongkoskirim'){
	include "cekongkir.php";
}
if($picik=='temukanagen'){
	echo "Ini Halaman Agen Terdekat";
}
if($picik=='transaksi'){
	include "transaksi.php";
}
if($picik=='logout'){
	include "logout.php";
}

if($picik=='pendaftaran'){
	include "pendaftaran.php";
}

if($picik=='berita'){
	include "berita.php";
}

if($picik=='detailberita'){
	echo "<span class='judul_head'>&#187<b>Berita Terkini</b></span><br><br>";
  $perintah = $mysqli->query("select * from berita where id_berita=$_GET[id]");

while($data=$perintah->fetch_array()){
    $judul = $data['judul'];
    $gambar = $data['gambar'];
    $isi_berita = nl2br($data['isi_berita']);

    echo "<h2>".$judul."</h2>";
    echo "<img src='img/$gambar' width=300 height150> <br>";
    echo "<div class='isi_berita'><p>$isi_berita</p></div>";
	}
}
?>