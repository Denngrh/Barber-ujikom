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
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shorcut icon" type="image/png" href="assets/img/logo.png" />
    <script src="assets/sciript.js" defer></script>
    <title>Sign In</title>
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
            src="assets/img/signin.svg"
            width="450px"
            alt="Login
          Image"
          />
        </div>
        <div class="col-md-5 mt-md-5">
          <div class="card shadow-sm p-3">
            <div class="card-body">
              <h4>Sign In</h4>
              <p class="text-muted">Login masbroo</p>
              <form action="../proses/loginProses.php" class="mt-4" method="post">
                <div class="form-group">
                <?php if (isset($_GET['info'])) { ?>
                    <div class="alert alert-danger text-center" role="alert">
                    <?= $_GET['info'] ?>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                <?php if (isset($_GET['cek'])) { ?>
                    <div class="alert alert-success text-center" role="alert">
                    <?= $_GET['cek'] ?>
                    </div>
                    <?php } ?>
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                    name="email"
                    id="email"
                    required
                  />
                </div>
                <div class="input-group mt-2">
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    id="password"
                    name="password"
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
                 Belum punya akun?
                    <a class="text-theme" href="register.php">Sign Up</a>
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

    <script>
      feather.replace();
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>