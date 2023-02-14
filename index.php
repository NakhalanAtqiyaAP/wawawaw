<?php
    if(isset($_POST['submit'])){
        if( $_POST['username'] == "Indah" && $_POST['password'] == "Kawai"){
            header("Location: wlcm.php");
            exit;
        }else{
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<style>
  body{
    background-color: pink;
    background-size: cover;
  }
  .container{
    margin-top:180px;
  }
  p{
    color:red;
  }
  button{
    margin-top:20px;
  }
</style>
<div class="container">
<div class="d-flex justify-content-center">
<div class="card" style="width: 30rem;">
  <div class="card-body">
    <h1>Login</h1>
    <form action="" method= "post">
    <?php if (isset($error) ): ?>
        <p>Username/Password salah</p>
        <?php endif;?>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" >
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name= "password"> 
        <button type="submit" class="btn btn-secondary" name="submit">Submit</button>
        </form>
    </div>
    </div>
  </div>
</div>

</body>
</html>