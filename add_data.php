<?php

include 'koneksi.php';
$nama_item = "";
$id_item="";
// pemeriksaan menggunakan fungsi isset()
$nama_item = isset($_POST['namaitem']) ? $_POST['namaitem'] : '';
//$id = $_POST['id'];

$nama_item = $_POST['namaitem'];
$deskripsi_item = $_POST['deskripsi'];
$idkategori_skin = $_POST['idkategori_skin'];
//$id_item = $_POST['iditem'];

$target_dir = "gambar/";
$nama_gambar = basename($_FILES["fileupload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileupload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

echo $nama_item;
echo "<br>";
echo $deskripsi_item;
echo "<br>";
echo $nama_gambar;
echo "<br>";
echo $target_file;

$sql = "INSERT INTO item (namaitem, deskripsi, gambar, idkategori_skin)
VALUES ('$nama_item', '$deskripsi_item', '$nama_gambar','$idkategori_skin')";

if (mysqli_query($conn, $sql)) {
  echo "Record Insert Successfully";
  echo "<script type='text/javascript'>alert('Record Insert Successfully');</script>";
  header("location:tables.php");
} else {
  echo "Error insert record: " . mysqli_error($conn);
}


?>