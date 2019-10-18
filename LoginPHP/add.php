<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styleadd.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <title>Syanex | Daftar Sekarang.</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light text-center container">
    <a class="navbar-brand" href="home.html">Syaufy</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="add.php">Daftar <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Lihat Data</a>
        </li>
        
      </ul>
    </div>
  </nav>


  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"  data-aos="fade-right" data-aos-duration="1500">
          Hai, Daftarkan<br />
          Akunmu Di Website
         <br>Sekarang Juga!
        </h1>
      </div>
    </div>

  <div class="row about">
    <div class="col-6"   data-aos="fade-right" data-aos-duration="1000">
    <img src="about2.png" class="img1 img-fluid my-auto">
    </div>
    <div class="col-6 text1 text-center mx-auto my-auto"  data-aos="fade-left" data-aos-duration="1500">
      <h3>Kenapa Harus Daftar?</h3>
      <p>Karena Dengan Mendaftar Kamu Bisa Login Di Website Ini,,
        <br>Makanya Ayo Daftar! Dan Kamu Juga Bisa Lihat Akun Lho!
      <br>Dengan Daftar Kamu Sudah Masuk Komunitas Kami!</p>
    </div>
  </div>

  <div class="daftar text-center" data-aos="fade-up" data-aos-duration="1200">
    <p>Daftar Sekarang!</p>
  </div>

  <div class="row formdaftar"  data-aos="flip-up" data-aos-duration="1200">
    <div class="col-8 mx-auto">
      <form action="add.php" class="form" method="post" name="formdaftar">
        <p class="text-center">Daftar Yuk!</p>
        <div class="form-group">
      <label for="username">Id</label>
      <input type="number" name="id" class="form-control" id="username" placeholder="Masukan Username Kamu ">
      <small id="emailHelp" class="form-text text-muted">Masukan Id Dengan Angka.</small>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Username Kamu ">
      <small id="emailHelp" class="form-text text-muted">Masukan Username anda dengan tanpa space ya.</small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password Kamu">
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email Kamu">
    </div>
    <button type="submit" name="kirim" class="btn btn-lg btn-block mx-auto" onclick="Swal.fire(
  'Good job!',
  'Kamu Terdaftar',
  'success'
)" >Submit</button>
    <button type="reset" class="btn btn-lg btn-block mx-auto">Reset</button>
  </form>
    </div>
  </div>

<br>
<br>
<br>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.3/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
  AOS.init();
</script>
  </body>
</html>

<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['kirim'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // include database connection file
    include_once("koneksi.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO userlogin(id,username,password,email) VALUES('$id','$username','$password','$email')");

    // Show message when user added
    echo "User added successfully. <a href='index.php'>View Users</a>";
}
?>
