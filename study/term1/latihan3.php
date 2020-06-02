<?php
require 'function.php';
$tentara = query("SELECT * FROM tentara ");

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
  <title>List Soldiers</title>
</head>

<body>
  <h3>List Soldiers</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Photo</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
    <?php $i = 1;
    foreach ($tentara as $t) : ?>
      <tr>

        <td><?= $i++; ?></td>
        <td><img style="width:100px" src="img/<?= $t['gambar']; ?>" width="80"></td>
        <td><?= $t['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $t['id']; ?>">detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>