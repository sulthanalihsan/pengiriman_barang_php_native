<div id="transaksi">
  <h2>Form Transaksi Pengiriman</h2>
  <form method='post' action='#' style="margin-top:30px;">
    <table>
      <tr>
        <td>Nama Pengirim</td>
        <td>&nbsp;
          <!-- <input class="form" type='text' name='namapengirim' placeholder='Masukkan nama pengirim'> -->
          <input class="form" list="browsers" name="nama_pengirim" placeholder='Masukkan nama pengirim' style='margin-left:-4;'>
          <datalist  id="browsers">
            <?php
            $perintah=$mysqli->query("select * from pelanggan");
            while($data=mysqli_fetch_array($perintah)){
              echo "<option value='$data[nama_lengkap]'>";
            }
            ?>
          </datalist>
        </td>
      </tr>
      <tr>
        <td>Kota Tujuan</td>
        <td>&nbsp;
          <select name='kota_tujuan' class="form" style='margin-left:-4;'>
            <option value="0">-PILIH KOTA-</option>
            <?php
            $perintah=$mysqli->query("select * from ongkir");
            while($data=mysqli_fetch_array($perintah)){
              echo "<option value='$data[kota_tujuan]'>$data[kota_tujuan]</option>";
            }
            ?>
          </select>

        </td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td>&nbsp;<input class="form" type='text' name='nama_barang' placeholder='Masukkan nama barang'></td>
      </tr>
      <tr>
        <td>Nama Penerima</td>
        <td>&nbsp;<input class="form" type='text' name='nama_penerima' placeholder='Masukkan name penerima'></td>
      </tr>
      <tr>
        <td>No.Hp Penerima</td>
        <td>&nbsp;<input class="form" type='text' name='nohp_penerima' placeholder='Masukkan nomer hp penerima'></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>&nbsp;<textarea class="form" name='alamat_pengiriman' rows=10 placeholder='Masukkan alamat anda' ></textarea </td>
        </tr>
        <tr>
          <td>Kecamatan</td>
          <td>&nbsp;<input class="form" type='text' name='kecamatan' placeholder='Masukkan nama kecamatan'></td>
        </tr>
        <tr>
          <td>Kode Pos</td>
          <td>&nbsp;<input class="form" type='text' name='kodepos' placeholder='Masukkan kode pos'></td>
        </tr>
        <tr>
          <td></td>
          <td><input class="submit" type='reset' value='BATAL' ><input class="submit" type='submit' name='submit' value='SIMPAN' style='margin-left:5;'> </td>
        </tr>
      </table>
    </form>
  </div>

  <?php
  if(isset($_POST['submit'])) {
    include "config/format_rupiah.php";
    $acak = rand(01,99);
    $no_resi = date('ymd')."-".date('His')."-".$acak;
    $tanggal = date('ymd').date("His");
    $perintah = $mysqli->query("select * from ongkir where kota_tujuan='$_POST[kota_tujuan]'");
    while($dataongkir=mysqli_fetch_array($perintah))
    $ongkir=format_rupiah($dataongkir['tarif']);
    //simpan data kedatabse
    $sql="insert into pengiriman (no_resi,id_status,tgl_pengiriman,kota_tujuan,nama_pengirim,
    nama_barang,alamat_pengiriman,nama_penerima,nohp_penerima,kodepos,kecamatan)
    values('$no_resi',1,$tanggal,'$_POST[kota_tujuan]','$_POST[nama_pengirim]',
    '$_POST[nama_barang]','$_POST[alamat_pengiriman]','$_POST[nama_penerima]',
    '$_POST[nohp_penerima]','$_POST[kodepos]','$_POST[kecamatan]')";

    $register=$mysqli->query($sql);

    //cek data apakah berhasil masuk
    if($register){
      echo "
      <script>alert('Transaksi tersimpan!');</script>

      <div id='rekap-transaksi'>
      <h3>Rekap Transaksi</h3>
      <table>
      <tr>
      <td>Nomor Resi</td>
      <td>$no_resi</td>
      </tr>
      <tr>
      <td>Nama Pengirim</td>
      <td>$_POST[nama_pengirim]</td>
      </tr>
      <tr>
      <td>Kota Tujuan</td>
      <td>$_POST[kota_tujuan]</td>
      </tr>
      <tr>
      <td>Nama Barang</td>
      <td>$_POST[nama_barang]</td>
      </tr>
      <tr>
      <td>Nama Penerima</td>
      <td>$_POST[nama_penerima]</td>
      </tr>
      <tr>
      <td>No.Hp Penerima</td>
      <td>$_POST[nohp_penerima]</td>
      </tr>
      <tr>
      <td>Alamat</td>
      <td>$_POST[alamat_pengiriman]</td>
      </tr>
      <tr>
      <td>Kecamatan</td>
      <td>$_POST[kecamatan]</td>
      </tr>
      <tr>
      <td>Kode Pos</td>
      <td>$_POST[kodepos]</td>
      </tr>
      <tr>
      <td>Ongkos Kirim</td>
      <td>Rp.$ongkir</td>
      </tr>
      <tr>
      <td></td>
      <td><button onClick='print_d()''>Print Struk</button></td>
      </tr>
      </table>
      </div>


      ";

    }else{
      echo "<script>alert('Gagal di tambahkan!');</script>";
    }

  }


  echo "
  <script>
  function print_d(){
    window.open('config/print.php','_blank');
  }
  </script>
  ";
  ?>
