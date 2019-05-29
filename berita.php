<?php
$home = $mysqli->query("select * from berita order by id_berita asc limit 5 ");
echo "<span class='judul_head'>&#187<b>Berita Terkini</b></span>";
while($data = $home->fetch_array()){
  $judul = $data['judul'];
  $tgl_berita = $data['tanggal'];
  $tgl_berita= date("d F Y", strtotime("$tgl_berita"));
  $hari_berita = date("l", strtotime("$tgl_berita"));
  $jam = date("H:i:s", strtotime("$data[tanggal]"));
  $gambar = $data['gambar'];
  $isi_berita = nl2br($data['isi_berita']);
  $isi_berita = substr($isi_berita,0,300);
  $isi_berita = substr($isi_berita,0,strrpos($isi_berita," "));

  $perintah = $mysqli->query("select * from admin where id_adm =$data[id_adm]");
  while($admin=mysqli_fetch_array($perintah))
  $penulis = $admin['username'];
  //$penulis = ucfirst($penulis);
  echo
  "
  <table>
  <tr><td colspan=3><span class='waktu_berita'>$hari_berita, $tgl_berita - $jam</span></td></tr>
  <tr><td colspan=3><span class=isi_judul>$judul</span></td></tr>
  <tr><td colspan=3><span class='penulis_berita'>Ditulis oleh : $penulis</span></td></tr>

  <tr></tr>
  <tr>
  <td><span class=gb_berita>
  <img src='img/$gambar' width=100 height=100></span></td>
  <td></td>
  <td><span class=id_berita>
  <p>$isi_berita ... <a href='?page=detailberita&id=$data[id_berita]'>Selengkapnya</a></p>
  </span></td>
  </tr>
  <br></table>

  <hr  style='border:1px dotted #FF5900'>";
}
?>
