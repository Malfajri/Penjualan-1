<?php include "koneksi.php";
     
     $ID_Data = $_GET['id'];

     $sql = "DELETE FROM komentar WHERE idkomentar = $ID_Data";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("location:tables_komentar.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
     ?>