













<?php
 $db = mysqli_connect('127.0.0.1:8080','root','','buku_tamu') or die("Koneksi Gagal");
 if($db->connect_error){
    echo "gagal konek";
    die("error!");

 }
?>
