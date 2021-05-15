<?php
session_start();
if( isset($_POST['btn_login']) ){
  $username = $_POST['username'];
  $kata_sandi = $_POST['kata_sandi'];
  $query = mysqli_query($connector,"SELECT * FROM tabel_data WHERE username = '$username' and kata_sandi = '$kata_sandi' ");
  if (mysqli_num_rows($query)){

    $_SESSION['status_login'] = 'hidup';
    $_SESSION['username'] = $username;
  }
  else{
    echo "<script>alert('input username atau katasandi salah')</script>";
    $_SESSION['status_login'] = 'mati';
  }
}



if( isset($_POST['btn_login_cookie']) ){
  $username = $_POST['username'];
  $kata_sandi = $_POST['kata_sandi'];
  $query = mysqli_query($connector,"SELECT * FROM tabel_data WHERE username = '$username' and kata_sandi = '$kata_sandi' ");
  if (mysqli_num_rows($query)){
    setcookie("username",$username,time()+120);
    setcookie("kata_sandi",$kata_sandi,time()+120);
    $_SESSION['status_login'] = 'hidup';
    $_SESSION['username'] = $username ;
  }
  else{
    echo "<script>alert('input username atau katasandi salah')</script>"; 
    $_SESSION['status_login'] = 'mati';
  }
}
?>