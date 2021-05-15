<?php
session_start();


if(isset($_SESSION['status_login'])){
  if($_SESSION['status_login'] == 'hidup'){
    echo "<h1>masuk sebagai $_SESSION[username]</h1>";
    if(isset($_COOKIE['username']) && isset($_COOKIE['kata_sandi'])){
      echo "<h1>status cookie aktif</h1>";
    }
    else{
      echo "<h1>status cookie tidak aktif</h1>";
    }
  }
  else{
    $_SESSION['status_login'] = 'mati';
    header("Location: masuk.php");
  }
}
else{
  header("Location: masuk.php");
}

// else{
//   if(isset($_COOKIE['username']) && isset($_COOKIE['kata_sandi'])){
//     $_SESSION['status_login'] = 'hidup';
//     $_SESSION['username'] = $_COOKIE['username'];
//   }
//   else{
//     header("Location: masuk.php");
//   }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="style/bootstrap.min.css">
</head>
<body>
  

  <script src="style/bootstrap.min.js"></script>
</body>
</html>