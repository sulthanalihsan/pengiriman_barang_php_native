<?php
session_start();
session_destroy();
echo "logout berhasil";
header("location:index.php");
?>
