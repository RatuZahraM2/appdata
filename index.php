<?php
    require 'controlr.php';
    $students= query("SELECT * FROM students");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DataBase</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    body{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    height: 600px;
    align-items: center;
    text-align:center;
    font-family: sans-serif;
    background-color:#FFA3FD
    }
    input{
    margin:15px;
    border-radius:10%;
    }
</style>
</head>
<body>
    <div class="container">
    <button type="button" class="btn btn-outline-light">
    <a href="input-data.php">Tambah Data ?</a></button>

    <table class="table" border="2">
    <tr>
        <th>no</th>
        <th>nama</th>
        <th>nis</th>
        <th>rombel</th>
        <th>rayon</th>
        <th>aksi</th>
    </tr>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach($students as $student) : ?>
    <tr>
        <td><?= $i?></td>
        <td><?= $student["nama"]?></td>
        <td><?= $student["nis"]?></td>
        <td><?= $student["rombel"]?></td>
        <td><?= $student["rayon"]?></td>

    <td>
    <a href="delete.php?id=<?= $student['id'] ?>"class="btn btn-danger" onclick="return confirm('Yakin mau dihapus dek?');">Hapus</a>
    <a href="tambah.php?id=<?= $student["id"]; ?>"class="btn btn-danger">ubah</anv>
    <a href="lihat.php?id=<?= $student["id"]; ?>"class="btn btn-danger">lihat</a>

    </td>
    </tr>
    <?php $i ++?>
    <?php endforeach; ?>
    </tbody>
    </table>
    </div>
</body>
</html>