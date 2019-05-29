

<div id="wrapper">
  <center>
    <img src='img/track.png' width="80" style="margin-right:20px">
    <h4>Lacak Pengiriman</h4>
    <form method='post' action='#' style="margin-top:30px;">
      <input class="form" type='text' name='no_resi' placeholder='Masukkan No Resi Anda' style="width:250px; height:40px;">
      <br>

      <input class="submit" type='submit' name='submit' value='CEK' style='margin:20px; height:40px;'>
    </form>
  </center>
</div>

<?php
if(isset($_POST['submit'])) {
  include "config/format_rupiah.php";
  $sql="select * from pengiriman where no_resi ='$_POST[no_resi]'";
  $perintah=$mysqli->query($sql);
  $data = $perintah->fetch_array();
  if(!is_null($data[0])){
    echo "<script>alert('Data Ditemukan!');</script>";
    $tgl_pengiriman=$data['tgl_pengiriman'];
    $status=$data['id_status'];
    echo "
    <div id='wrapper'>
    <center>
    <h3>Status Pengiriman</h3>
    <table id='cantik' >
    <tr><th>Nomor Resi</th><td>$data[no_resi]</td></tr>
    <tr><th>Tanggal Pengiriman</th><td>$data[tgl_pengiriman]</td></tr>
    <tr><th>Pengirim</th><td>$data[nama_pengirim]</td></tr>
    <tr><th>Penerima</th><td>$data[nama_penerima]</td></tr>
    <tr><th>Alamat Pengiriman</th><td>$data[alamat_pengiriman]</td></tr>
    </table>
    </center>
    </div>
    ";
    $sql2="select * from log_pengiriman where no_resi ='$_POST[no_resi]'";
    $perintah2=$mysqli->query($sql2);
    echo "
    <center>
    <table id='cantik' >
    <tr><th>Tanggal Pengiriman</th><th>Status</th></tr>";

    $sql3="select * from status";
    $perintah3=$mysqli->query($sql3);
    $namastatus = array();
    $i=0;
    while($data3=mysqli_fetch_array($perintah3)){
      $namastatus[$i]=$data3['nama_status'];
      $i++;
    }

    while($data2=mysqli_fetch_array($perintah2)){
      $status_pengiriman=$data2['id_status_lama'];

      echo "
      <tr><td>$data2[waktu_perubahan]</td><td>$namastatus[$status_pengiriman]</td></tr>
      ";
    }

    echo "
    </table>
    </center>";
  }
  else{
    echo "<script>alert('Data Tidak Ditemukan!');</script>";
  }

}

?>
