<?php
include "config/koneksi.php";
?>

<html>
<head>
  <title>Hubungi CS</title>
</head>
<body>
  <form method=POST action=# enctype='multipart/form-data'>
    <h2>Hubungi CS</h2>
    <table>
      <tr><td>Isi Pengaduan</td>
        <td>:</td>
        <td><textarea name='isi_pengaduan' cols=50 rows=10></textarea></td>
      </tr>

      <tr><td></td><td></td><td colspan=2><input type=submit name=kirim value=Kirim>
        <input type=button value=Batal onclick=self.history.back()>
      </td></tr>

    </table>
  </form>
</body>
</html>
<?php

if(isset($_POST['kirim'])) {
  //$sql_username = "";
  $plg=$mysqli->query("select * from pelanggan where email='$_SESSION[username]'");
  $dataplg=$plg->fetch_array();

  $tgl = date('ymd');
  //echo "$_SESSION[username]";

  $sql_simpan="insert into pengaduan (id_plg,tgl_pgdn,isi_pgdn) values ($dataplg[id_plg], '$tgl', '$_POST[isi_pengaduan]')";
  $simpan=$mysqli->query($sql_simpan);


  //cek data apakah berhasil masuk
  if($simpan){
    echo "
    <script>alert('Pertanyaan Terkirim, silahkan tunggu CS menjawab');</script>
    ";
  }else{
    echo "
    <script>alert('Gagal Mengirim');</script>
    ";
  }
}

$hubcs=$mysqli->query("select * from pengaduan where id_plg=(select id_plg from pelanggan where email='$_SESSION[username]') order by 1 desc ");

$ketemu=$hubcs->num_rows;
if($ketemu>0){
  echo "
  <table border=1>
  <tr><th>Tanggal Pengaduan</th><th>Deskripsi Pengaduan</th><th>Answer CS</th><th>Aksi</th></tr>
  ";
  while ($data_hubcs=$hubcs->fetch_array()) {
    echo "<tr><td>$data_hubcs[tgl_pgdn]</td><td>$data_hubcs[isi_pgdn]</td><td>$data_hubcs[jawaban_pgdn]</td>
    <td>
    <a href='?page=hubungics&hapus=$data_hubcs[id_pgdn]'>Hapus</a>
    <a href='?page=hubungics&edit=$data_hubcs[id_pgdn]'>Edit</a>
    </td>
    </tr>";
  }


  echo "
  </table>
  ";
}

if(isset($_GET['hapus'])) {
  $mysqli->query("delete from pengaduan where id_pgdn='$_GET[hapus]'");
  if($mysqli){
    echo "
    <script>alert('Hapus Berhasil!');</script>
    <script>location.href='javascript:history.go(-1)';</script>";
    header('location:tampil.php?page=hubungics');
  }else{
    echo "<script>alert('Hapus Gagal!');</script>";
  }
}
if(isset($_GET['edit'])) {
  $mysqli->query("delete from pengaduan where id_pgdn='$_GET[edit]'");
  if($mysqli){
    echo "
    <script>alert('Sudah Teredit!');</script>
    <script>location.href='javascript:history.go(-1)';</script>";
    header('location:tampil.php?page=hubungics');
  }else{
    echo "<script>alert('Edit Gagal!');</script>";
  }
}


?>
