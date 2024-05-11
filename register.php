
<?php

include 'database.php';
session_start();
$login_message = "";




 if(isset($_POST['login'])){
     $username = $_POST['username'];
     $password = $_POST['password'];
     
   
 $sql = " SELECT * FROM users WHERE username = '$username' AND password = 'password'";
 $result = $db->query($sql);
 if($result->num_rows > 0){
   $data = $result->fetch_assoc();
   $_SESSION["username"] = $data["username"];
   $_SESSION["is_login"] = true;
    header('location:page.php');
 } else{
     $login_message= "akun tidak ditemukan, silahkan daftar terlebih dahulu";

 }
}
?>









<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="registrasi.css " />
  </head>

  <body>
    <div class="wrapper">
      <div class="header">
        <h1 class="logo">Perpus</h1>
        <img src="perpus (1).png" alt="" width="150px" />
      </div>

      <div class="signup-form">
        <h2>Daftar</h2>

        <form action="" method="post" autocomplete="" required, autofocus>
       
          <input type="text" placeholder="Username" name="username" />
          <input type="password" placeholder="Password" name="password" />

          <button>daftar</button>
        </form>
      </div>

      <div class="login">sudah punya akun? <a href="login.php">masuk</a></div>
    </div>
  </body>
</html>
