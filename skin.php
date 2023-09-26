<?php
session_start();
include 'koneksi.php';

$query = mysqli_query($conn,"SELECT * FROM skin ORDER BY namaskin");

    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cantik</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <?php include "menu.php" ?>
    </nav>
    <div class="wrapper">
        <section id="home">
             <div class="kolom">
                <?php while($row = mysqli_fetch_array($query)){ ?>
                    <img src="gambar/<?=$row['gambar']?>" style="width:500px;height:auto" alt="no pic">
                     <h2><?=$row['namaskin']?></h2>
                     <p><?=$row['deskripsi']?></p>
                     <hr style="width:100%">
                <?php } ?>
            </div>
        </section>


    </div>
</body>
</html>
