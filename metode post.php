<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $nama = $_POST["nama"];  // Assign value from form to $nama
  $nim = $_POST["nim"];     // Assign value from form to $nim
  $jurusan = $_POST["jurusan"]; // Assign value from form to $jurusan

  echo "halo  $nama   Nim anda:   $nim jurusan $jurusan";
}

?>

