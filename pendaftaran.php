<!--
<tr>
<td width="1038" align="center"> <marquee> <h1> <font face="Rockwell" color ="ffffff">REGISTRASI</font>  </h1> </marquee> </td>

</tr> -->

<!-- <div class="container">
<div class="content">
<div class="badan"> -->
<!-- <div class="kepala">
<br><p class="kepalatext"><center><b><font color="black" size="5"> REGISTRASI DISINI </font></b></center></p>

</div> -->
<center>
  <div class="bingkai">
    <form name="reg" action="#" method="post" enctype="multipart/form-data">
      <p class="kepalatext"><b><font color="black" size="5"> REGISTRASI DISINI </font></b></p>
      <table width="550" border="0">

        <tr>
          <td>Nama Lengkap</td>
          <td><input class="text" type="text" name="nama_lengkap" id="name" placeholder="Nama"></td>
        </tr>

        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <label class="jeniskelamin">
              <input type="radio" name="jenis_kelamin" id="laki" value="laki-laki">Laki-Laki</label>
              <label class="jeniskelamin">
                <input type="radio" name="jenis_kelamin" id="laki" value="perempuan">Perempuan</label>
              </td>
            </tr>

            <tr>
              <td>Tanggal Lahir</td>
              <td>

                <div>
                  <input type="date" name='ttl'>
                  <!-- <select class="tll" name="tanggal">
                  <option value="Tanggal" selected>Tanggal</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>

                <select class="tgllahir" name="bulan">
                <option value="Bulan" selected>Bulan</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>

              <select class="tgllahir" name="Tahun">
              <option value="Tahun" selected>Tahun</option>
              <option value="2003">2018</option>
              <option value="2003">2017</option>
              <option value="2003">2016</option>
              <option value="2003">2015</option>
              <option value="2003">2014</option>
              <option value="2003">2003</option>
              <option value="2003">2012</option>
              <option value="2003">2011</option>
              <option value="2003">2010</option>
              <option value="2003">2009</option>
              <option value="2003">2008</option>
              <option value="2003">2007</option>
              <option value="2003">2006</option>
              <option value="2003">2005</option>
              <option value="2003">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
            </select> -->
          </div>
        </td>
      </tr>




                <td>Telepon</td>
                <td><input class="text" type="text" name="nohp" id="tlp" placeholder="Telepon"></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><input class="text" type="text" name="email" id="tlp" placeholder="Masukkan email"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input class="text" type="password" name="password" id="password" placeholder="Masukkan password Baru"></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><input class="text" type="text" name="alamat_lengkap"  id="tlp" placeholder="Alamat"></td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td><input class="text" type="text" name="pekerjaan" id="pekerjaan" placeholder="Tambahkan pekerjaan"></td>
              </tr>

              <tr>
                <td>
                  <input class="submit2" type="submit" name="submit" value="Submit">
                  <input class="submit2" type="reset" name="reset" value="Reset">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </center>
      <!-- </div>
    </div>
  </div> -->
  <!-- <footer>
  <p> <marquee><font face="Rockwell" color ="ffffff"> Copyright &copy; 2018. Muhammad Halik</font> </marquee></p>
</footer> -->

<?php
if(isset($_POST['submit'])){
  // $sql="insert into pengiriman (no_resi,id_status,tgl_pengiriman,kota_tujuan,nama_pengirim,
  // nama_barang,alamat_pengiriman,nama_penerima,nohp_penerima,kodepos,kecamatan)
  // values('$no_resi',1,$tanggal,'$_POST[kota_tujuan]','$_POST[nama_pengirim]',
  // '$_POST[nama_barang]','$_POST[alamat_pengiriman]','$_POST[nama_penerima]',
  // '$_POST[nohp_penerima]','$_POST[kodepos]','$_POST[kecamatan]')";
  //
  // $register=$mysqli->query($sql);
  $password = md5($_POST['password']);
  $result=$mysqli->query("insert into pelanggan (nama_lengkap,jenis_kelamin,ttl,nohp,email,password,alamat_lengkap,pekerjaan) values
  ('$_POST[nama_lengkap]','$_POST[jenis_kelamin]','$_POST[ttl]','$_POST[nohp]','$_POST[email]','$password','$_POST[alamat_lengkap]','$_POST[pekerjaan]')");

  if($result==true){
    echo "
    <script>alert('Data Tersimpan');</script>
    ";
  }
}



?>
