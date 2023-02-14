<?php
// cek apakah tombol submit sudah di pencet apa belum
if(isset($_POST["submit"])){
    // cek username dan password
    if($_POST["username"] == "Nakhalan" && $_POST["password"] == "admin123"){
    //jika benar, redirect ke halaman admin
        header("Location: data.php");
        exit;
    }
        else{
    //jika salah tampilkan pesan kesalahan
            $eror=true;
        }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <style>
h1{
  margin-bottom: 30px;
}
 body{
  background-image: url(wa.jpeg);
  background-size: cover;
 }
.container {
      margin-top:150px;
    }
  </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<form action="data.php" method="post">
<div class="container">
<div class="d-flex justify-content-center">
<div class="card" style="width: 60rem;" style="background-color: #205295;">
  <div class="card-body"style= "border:1px solid #13005A">

    <h1>Masukan Masukan</h1>
  <div class="mb-3">
    <label for="Nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <button type="submit" class="btn btn-secondary">Kirim</button>
  </div>
</div>
  </div>
</form>
</div>
</div>
<?php ?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>