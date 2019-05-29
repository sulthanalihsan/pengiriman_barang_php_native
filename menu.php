<?php

$perintah = $mysqli->query("Select * from modul where publish='Y' and aktif='Y' order by urutan");


if(isset($_SESSION["login"])){
  $perintah = $mysqli->query("Select * from modul where aktif='Y' order by urutan");

}else{
  $perintah = $mysqli->query("Select * from modul where publish='Y' and aktif='Y' order by urutan");
}

while($data=mysqli_fetch_array($perintah)){
  echo "    <li><a href='$data[link]'>$data[nm_modul]</a></li>
  ";
}
?>