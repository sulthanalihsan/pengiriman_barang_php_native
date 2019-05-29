<?php
//echo "Ini Halaman Beranda";
echo "
<div id=slidercontainer>
<div id=css3slider>";
$sql="select * from fotoberanda";
$foto=$mysqli->query($sql);
while ($datafoto=mysqli_fetch_array($foto)) {
  echo "
  <img src='img/$datafoto[fotonya]' width=767 alt='Beranda'>
  ";
}


// echo "
// <div id=slidercontainer>
// <div id=css3slider>
// <img src='img/beranda1.jpg' width=767 alt='Beranda'>
// <img src='img/beranda2.jpg' width=767 alt='Beranda'>
// <img src='img/beranda3.jpg' width=767 alt='Beranda'>
// <img src='img/beranda1.png' width=767 alt='Beranda'>
// <img src='img/beranda2.png' width=767 alt='Beranda'>
// <img src='img/beranda3.png' width=767 alt='Beranda'>
// </div>
// </div>
// ";

echo "
</div>
</div>
";
// <img src='img/beranda2.png' width=650>
?>
