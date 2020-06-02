<?php

function koneksi()
{
  return mysqli_connect('localhost:8889', 'root', 'root', 'pw_2020');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  //jika menampilkan cuman satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
