<?php
session_start();
if(isset($_POST['keluar'])){
    session_unset();
    session_destroy();
    header('location: index.php');
}
?>













<!DOCTYPE html>
<html lang="en">
  <head>

     <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <link
      rel="shortcut icon"
      href="/src/assets/favicon.ico"
      type="image/x-icon"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="keywords" content="company web, weneedev" />
    <meta
      name="description"
      content="IMPROVE YOUR DIGITAL NEEDS
    WITH US.."
    />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <!-- Fonts Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    <!-- Css -->
    <link rel="stylesheet" href="/src/css/syle.css" />
    <!-- AOS -->
    <link rel="stylesheet" href="syle.css" />
    <script src="page.js"></script>
    <title>Perpustakaan</title>
  </head>
  <body>
 
   <!-- NAVBAR START -->
   <nav class="navbar navbar-expand-lg fixed-top shadow-lg" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="http://stpndrs.epizy.com" target="_blank"><img src="img/logo-port.png"
          style="width: 5%; margin: 0" alt="" />
       
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
      <div class="justify-content-end collapse navbar-collapse" id="navbarSupportedContent">
        <div class="justify-content-end">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navBar">
            
            <li class="nav-item">
              <a class='nav-link' href='tentang.html'>Tentang</a>
            </li>
           
            
          
           
        ss
        </div>
      </div>
    </div>
  </nav>
  <br>
  <!-- NAVBAR END -->

  <!-- navbar mobile start -->
  <div class="navbarMobile">
    <a class='perNavbarMobile' href='page.html'>
      <div class="icon">
        <i class="bi bi-house"></i>
      </div>
      <h3>Home</h3>
    </a>

    <a class='perNavbarMobile' href='tentang.html'>
      <div class="icon">
        <i class="bi bi-people-fill"></i>
      </div>
      <h3>Tentang</h3>
    </a>

    <a class='perNavbarMobile' href='/berita'>
      <div class="icon">
        <i class="bi bi-book"></i>
      </div>
      <h3>Book</h3>
    </a>


   
    <a class='perNavbarMobile' href='/contact'>
      <div class="icon">
        <i class="bi bi-chat-left-text"></i>
      </div>
      <h3>Contact</h3>
    </a>
  </div>
  <!-- navbar mobile end -->

  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="bi bi-arrow-up"></i>
  </button>
                                                                                                                                                                                                                                                                                                 ``    ` ` ` ` ` ` ` ` ` ` ` ` ` ` ` ` ` ` ` ` `                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       ` 
    
    <!-- ====== HEADER ====== -->
    <header class="home">
      <nav class="fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">

          </a>
    <li class="nav-item active">

          </ul>
        </div>
      </nav><h3>selamat datang <?php echo $_SESSION["username"]; ?> </h3>
      <div class="hero">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 data-aos="zoom-in" data-aos-duration="1500">
                Perpus adalah layanan perpustakaan digital
              </h1>
              <a
                class="btn btn-yellow"s
                href="/src/pages/contactus"
                >CONTACT US</a
              >
            </div>
          </div>
        </div>
      </div>
     <script src="page."> </script>
  </body>
</html>