<?php
require 'function.php';
$tentara = query("SELECT * FROM tentara ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Soldiers</title>
</head>

<body>
  <h3>List Soldiers</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Photo</th>
      <th>NRP</th>
      <th>Name</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    <?php $i = 1;
    foreach ($tentara as $t) : ?>
      <tr>

        <td><?= $i++; ?></td>
        <td><img src="img/<?= $t['gambar']; ?>" width="80"></td>
        <td><?= $t['nrp']; ?></td>
        <td><?= $t['nama']; ?></td>
        <td><?= $t['email']; ?></td>
        <td>
          <a href="">edit</a> | <a href="">remove</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>