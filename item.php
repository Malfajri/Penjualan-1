<?php
session_start();
include 'koneksi.php';


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
                <?php
                $query = mysqli_query($conn,"SELECT * FROM kategori_skin ORDER BY idkategori_skin");
                while($kategori = mysqli_fetch_array($query)){
                    echo "<h1>".$kategori['namakategori_skin']."</h1>";
                

                    $query2 = mysqli_query($conn,"SELECT * FROM item WHERE idkategori_skin = '".$kategori['idkategori_skin']."' ORDER BY namaitem");
                    while($row = mysqli_fetch_array($query2)){ 
                ?>
                    <img src="gambar/<?=$row['gambar']?>" style="width:350px;height:auto;margin:40px" alt="no pic">
                     <h2><?=$row['namaitem']?></h2>
                     <p><?=$row['deskripsi']?></p>
                     <hr style="width:100%">
                <?php 
                    } 
                
                }?>
            </div>
        </section>
        
        <section id="komentar">
             <div class="card o-hidden border-0 shadow-lg my-5">
                <form action="komentar.php" method="post">
                <table style="width:500px">
                     <tr>
                        <td style="width:30%">Nama </td>
                        <td style="width:1%">:</td>
                        <td><input type="text" name="nama" style="width:69%"></td>
                     </tr>   
                     <tr>
                        <td>Komentar </td>
                        <td>:</td>
                        <td><textarea name="isikomentar" style="width:69%;height:100px"></textarea></td>
                     </tr> 
                     <tr>
                        <td colspan="2"></td>
                        <td><input type="submit" value="Kirim"></td>
                     </tr>   
                </table>
                </form>
                <?php
                    $query = mysqli_query($conn,"SELECT nama,isikomentar FROM komentar ORDER BY idkomentar DESC");
                    while($row = mysqli_fetch_array($query)){ 
                         echo "<h5>".$row['nama']."</h5>".nl2br($row['isikomentar'])."<hr style='width:100%'>";   
                    }
                ?>
            </div>
        </section>


    </div>
</body>
</html>
