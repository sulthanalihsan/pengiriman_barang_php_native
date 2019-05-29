<?php
include "config/koneksi.php";

if(isset($_POST['login'])){
  $user = $_POST['username'];
  $pass = md5($_POST['password']);
  // echo "$user $pass";
  $login=$mysqli->query("select * from pelanggan where email='$user' AND password='$pass'");
  //  $ketemu=mysqli_num_rows($login);
  $ketemu = $login->num_rows;

  if($ketemu>0){
    session_start();
    while($row=mysqli_fetch_array($login)){
      $_SESSION["login"]=true;
      $_SESSION["username"]=$row['email'];
      $_SESSION["pass"]=$row['password'];
    }
    echo "<script>location='index.php';</script>";
  } else {
    echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
    echo "<script>location='index.php';</script>";
  }
}
?>
