

<?php

include 'database.php';
session_start();
$login_message = "";




 if(isset($_POST['login'])){
     $username = $_POST['username'];
     $password = $_POST['password'];
   
   
 $sql = " SELECT * FROM users WHERE username = '$username' AND password = '$password'";
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
    <title>Instagram Login</title>
    <link rel="stylesheet" type="text/css" href="login.css " />
  </head>
  <body>
    <div class="box">
      <div class="wrapper">
        <div class="header">
          <h1 class="logo">Perpus</h1>
          <img src="perpus (3).png" alt="" width="150px" />
        </div>

        <div class="login-form">
          <h2>Masuk</h2>
          <i><?php echo $login_message; ?></i> <br>
     <form action="login.php" method="POST">
      Username :  <input type="text" name="username" id="" placeholder="username"> <br> <br>
     Password :   <input type="password" name="password" id="" placeholder="password"> <br> <br>
        <button type="submit" name="login"> login sekarang</button>
     </form>
          <br />
          <a href="lupa.html">Lupa password?</a>
        </div>

        <div class="sign-up">
          Tidak punya akun? <a href="register.php">Daftar</a>
        </div>
      </div>
    </div>
  </body>
</html>
