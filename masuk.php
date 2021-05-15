<?php
session_start();
require "fungsi/koneksi.php";
require "fungsi/fungsi_login.php";
if(isset($_SESSION['status_login'])){;
  if($_SESSION['status_login'] == 'hidup'){
    header("Location: index.php");
  }
  
}
else{
  if(isset($_COOKIE['username']) && isset($_COOKIE['kata_sandi'])){
    $_SESSION['status_login'] = "hidup";
    $_SESSION['username'] = $_COOKIE['username'] ;
    header("Location: index.php");
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <style>
    body{
      background-color: pink;
    }
    .table_form{
      width: 650px;
      background-color: white;
      margin-left: auto;
      margin-right: auto;
      margin-top: 20vh;
    }
  </style>
</head>
<body>
  <form action="" method="POST">
    <table class="table table_form">
      <tr><td><h1 class="fs-4">Formulir Login</h1></td></tr>
      <tr>
        <td>username</td> <td><input class="form-control" type="text" name="username"></td>
      </tr>
      <tr>
        <td>kata sandi</td> <td><input class="form-control" type="password" name="kata_sandi"></td>
      </tr>
      <tr>
      
      <td><button type="submit" name="btn_login" class="btn btn-outline-dark">login tanpa cookie</button></td>
      <td><button type="submit" name="btn_login_cookie" class="btn btn-outline-dark">login dengan cookie</button></td>
      </tr>
    </table>
  </form>
    

  <script src="style/bootstrap.min.js"></script>
</body>
</html>