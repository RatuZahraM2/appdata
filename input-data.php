<?php
    require 'controlr.php';

    if(isset($_POST["submit"])){

    if(input($_POST)> 0){
    echo "<script>alert('data berhasil');
    document.location.href = 'index.php';
    </script>";
    }else{
    echo"<script>alert('data gagal');
    document.location.href = 'index.php';
    </script>";
    echo mysqli_error($conn);
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    .card{
    margin-top: 70px;
    }
    body{
        background-color:#FFA3FD
    }
    input{
    margin:15px;
    border-radius:50px;
    }
</style>
</head>

<body>
<center>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Masukan Data Anda</h5>
        </div>
        <form action="" method="post">
        <label for="">nama</label><br>
        <input type="text" name="nama" id="" required>
        <br>
        <label for="">nis</label><br>
        <input type="text" name="nis" id="" required>
        <br>
        <label for="">Rombel</label><br>
        <input type="text" name="rombel" id="" required>
        <br>
        <label for="">rayon</label><br>
        <input type="text" name="rayon" id="" required>
        <br>
        <label for="">status</label><br>
        <input type="text" name="status" id="" required>
        <br>
        <label for="">hobi</label><br>
        <input type="text" name="hobi" id="" required>
        <br>
        <label for="">alamat</label><br>
        <input type="text" name="alamat" id="" required>
        <br>
        <label for="">merk_laptop</label><br>
        <input type="text" name="laptop" id="" required>
        <br>
        <label for="">cita_cita</label><br>
        <input type="text" name="citacita" id="" required>
        <br>
        <label for="">gambar</label><br>
        <input type="file" name="gambar" id="" require>
        <br>
        <br><button type="submit" name="submit">kirim</button>
</form>
    <div class="card-body">
</form>
</center>
</body>
</html>

