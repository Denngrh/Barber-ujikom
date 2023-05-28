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
    <link rel="shorcut icon" type="image/png" href="./assets/img/logo.png" />
    <script src="./assets/sciript.js" defer></script>
    <title>Admin Area</title>
</head>
<body>
 <!-- Login Start -->
 <div class="container">
      <div class="row">
        <div class="mx-auto mt-5 text-center">
          <img src="assets/img/logo.png" width="8%" alt="Logo Barber" />
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-7 mt-3">
          <img
            class="img-fluid"
            src="assets/img/login.svg"
            width="550px"
            alt="Login
          Image"
          />
        </div>
        <div class="col-md-5 mt-3">
          <div class="card shadow-sm p-3">
            <div class="card-body">
              <h4><center>Admin Area</center></h4>
              <form class="mt-4" method="post">
                <div class="form-group">
                <?php if (isset($_GET['info'])) { ?>
                    <div class="alert alert-danger text-center" role="alert">
                    <?= $_GET['info'] ?>
                    </div>
                    <?php } ?>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Username"
                    name="username"
                    id="username"
                    autocomplete="off"
                    required
                  />
                </div>
                <div class="input-group mt-2">
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    id="password"
                    name="pass"
                    autocomplete="off"
                    required
                  />
                </div>
                <div class="text-end mt-2">
                </div>
                <div class="d-grid gap-2">
                  <button
                    class="btn mt-2 btn-color-theme"
                    type="submit"
                    name="submit"
                    id="login"
                  >
                   Login
                  </button>
                  <p class="text-center">
                  <a class="text-theme text-center" href="index.php">Back to Home</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script>
      feather.replace();
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>