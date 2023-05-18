<?php 
// Proses Login
    error_reporting(0); 
    session_start();
    include 'inc/koneksi.php';
 
    // menangkap data yang dikirim dari form login
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['pass']);
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' and password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: admin/index.php");
    }
    else{
        header("Location: login.php?info=Username atau password salah!!");
    }
    // end
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shorcut icon" type="image/png" href="assets/img/logo.png" />
    <script src="assets/sciript.js" defer></script>
    <title>Admin Area</title>
</head>
<body>
 <!-- Login Start -->
    <section class="about mt-5 pd-5">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-12 offset-md-3">
            <img src="assets/img/login.svg" width="500px" class="img-fluid" alt="contact Image" />
          </div>
          <div class="col-md-6 offset-md-3 mt-2">
            <h2 class="fw-bold text-center" >
              Admin
              <span class="text-theme">Area</span>
            </h2>
            <hr>
            <div class="map-content-9 mt-lg-0 mt-10">
                    <form method="post">
                    <?php if (isset($_GET['info'])) { ?>
                    <div class="alert alert-danger text-center" role="alert">
                    <?= $_GET['info'] ?>
                    </div>
                    <?php } ?>
                        <div class="twice-two">
                            <input type="text" class="form-control" name="username" placeholder="Masukan Username" required ><br>
                        </div>
                        <div class="twice-two">
                            <input type="Password" class="form-control" name="pass"  placeholder="Masukan Password" required><br>
                        </div>
                        <div class="" style="margin-top: -15px;">
                        <a href="index.php">Back your home page </a><br>
                        </div>
                        <button type="submit" class="btn btn-outline-theme pe-4 ps-4 pt-2 mt-2 offset-5" name="submit">Login</button>
                    </form>
                </div>
            </div>
          </div>
          <!-- Login End -->
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
      feather.replace();
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>