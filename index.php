<?php

$sumber = 'https://tifupb.id/21a3';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Kelas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
  <h1 class="text-center mt-3">DATA KEHADIRAN </h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

  <table class="table">
    <thead>
        <tr>
          <th>No</th>
          <th>Nim</th>
          <th>Nama</th>
          <th>Pertemuan 1</th>
          <th>Pertemuan 2</th>
          <th>Pertemuan 3</th>
        </tr>
      </thead>
      <tbody>

      <?php foreach ($data as $row) {
        #code..

      ?>
        <tr>
          <td><?= $row['NO'] ?></td>
          <td> <?= $row['NIM'] ?></td>
          <td><?= $row['NaMa'] ?></td>
          <td> <?= $row['1'] ?></td>
          <td><?= $row['2'] ?></td>
          <td> <?= $row['3'] ?></td>
        </tr>
  <?php } ?>
  </tbody>
      </table>
  
</body>

</html>