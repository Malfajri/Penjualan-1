<?php
include 'koneksi.php';

mysqli_query($conn,"INSERT INTO komentar (nama,isikomentar)VALUES('".$_POST['nama']."','".$_POST['isikomentar']."')");

header("location:item.php#komentar");

    

?>