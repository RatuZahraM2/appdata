<?php
    require 'controlr.php';

    $id = $_GET["id"];

    $student = query("SELECT * FROM students WHERE id = $id ")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>Lihat</title>
</head>
<style>
    body{
        background-color:#FFA3FD;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    height: 700px;
    align-items: center;
    text-align:center;
    }

    img{
        width: 150px;

    }
</style>
<body>  
<div class="card" style="width: 18rem;">

    <div class="card-body">
    <h5 class="card-title"><?= $student["nama"]?></h5>
    <lu><p class="card-text">
<ul>
    <p><img src="img/<?= $student["gambar"]?>"></p>
    <li><?= $student["nis"]?></li>
    <li><?= $student["rombel"]?></li>
    <li><?= $student["rayon"]?></li>
    <li><?= $student["status"]?></li>
    <li><?= $student["hobi"]?></li>
    <li><?= $student["alamat"]?></li>
    <li><?= $student["merk_laptop"]?></li>
    <li><?= $student["cita_cita"]?></li>
   


</ul>
    <a href="index.php" class="btn btn-primary">Kembali</a>
</div>
</div>

</body>
</html>