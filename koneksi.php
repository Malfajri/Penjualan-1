<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "cantikprofile";

$conn    = mysqli_connect ($host,$user, $pass, $db);
if (!$conn){
    die('Gagal Terkoneksi');

}