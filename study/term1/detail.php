<?php
require 'function.php';

//ambil id dari url
$id = $_GET['id'];


//query tentara

$t = query("SELECT * FROM tentara WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    img {
      border-radius: 50%;
    }
  </style>
  <title>Detail Agent</title>
</head>

<body>
  <h3>Detail Agent</h3>
  <ul>
    <img style="width:200px" width="100" src="img/<?= $t['gambar'];  ?>">
    <li>NRP : <?= $t['nrp']; ?></li>
    <li>Name : <?= $t['nama']; ?></li>
    <li>Email : <?= $t['email']; ?></li>
    <li><a href="">edit</a> | <a href="">remove</a></li>
    <li><a href="latihan3.php?">Kembali</a></li>

  </ul>
</body>

</html>