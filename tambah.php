<?php

    require 'controlr.php';

    $id= $_GET["id"];

    $student = query("SELECT * FROM students WHERE id = $id ")[0];

    if( isset($_POST["submit"]) ){
    if(update($_POST) > 0){
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
    </script>";
    }else{
    echo "<script>
    alert('data gagal diubah');
    document.location.href = 'index.php';
    </script>";

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
</head>
<style>
    body{
        background-color:#FFA3FD

    }
    div{
        margin-left: 280px;
        margin right: 50px;
        width: 300px;
        /* justify-content: center; */
    }
    h4{
        text-align: center;
    }
</style>
<body>
        <form action="" method="post" >
        <div class="card``"">
        <div class="card-body">
        <h4 class="card-title">Input Data Baru</h4>
        <ul class="list-group list-group-flush">
        <input type="hidden" name="id" id="" required value=" <?= $student["id"] ?>">
        <li class="list-group-item">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="" required value=" <?= $student["nama"] ?>">
        </li>
        <li class="list-group-item">
        <label for="nis">Nis:</label><br>
        <input type="text" name="nis" id="" required value=" <?= $student["nis"] ?>">
        </li>
        <li class="list-group-item">
        <label for="rombel">Rombel:</label><br>
        <input type="text" name="rombel" id="" required value=" <?= $student["rombel"] ?>">
        </li>
        <li class="list-group-item">
        <label for="rayon">Rayon:</label><br>
        <input type="text" name="rayon" id="" required value=" <?= $student["rayon"] ?>">
        </li>
        <li class="list-group-item">
        <label for="status">Status:</label><br>
        <input type="text" name="status" id="" required value=" <?= $student["status"] ?>">
        </li>
        <li class="list-group-item">
        <label for="hobi">hobi:</label><br>
        <input type="text" name="hobi" id="" required value=" <?= $student["hobi"] ?>">
        </li>
        <li class="list-group-item">
        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="" required value=" <?= $student["alamat"] ?>">
        </li>
        <li class="list-group-item">
        <label for="laptop">merk_laptop:</label><br>
        <input type="text" name="laptop" id="" required value=" <?= $student["merk_laptop"] ?>">
        </li>
        <li class="list-group-item">
        <label for="citacita">cita_cita:</label><br>
        <input type="text" name="citacita" id="" required value=" <?= $student["cita_cita"] ?>">
        </li>
        <li class="list-group-item">
        <label for="gambar">gambar:</label><br>
        <input type="file" name="gambar" id="" required value=" <?= $student["gambar"] ?>">
        </li>
    </ul>
    </div>
    <ul>
    </ul>
<button type="submit" name="submit" class="btn btn-info"><b>KIRIM</b></button>
</div>
</form>
</body>
