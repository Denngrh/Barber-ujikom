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
    <title>Sign Up</title>
</head>
<body>
 <!-- Register Start -->
 <div class="container">
      <div class="row">
        <div class="mx-auto mt-2 text-center">
          <img src="assets/img/logo.png" width="8%" alt="Logo Barber" />
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6">
          <img
            class="img-register img-fluid"
            src="assets/img/signup.svg"
            width="450px"
            alt="Register Image"
          />
        </div>
        <div class="col-md-6 mt-3">
          <div class="card shadow-sm p-3">
            <div class="card-body">
              <h4>Sign Up</h4>
              <p class="text-muted">Register mabroo</p>
              <form action="../proses/RegisterProses.php" method="post" class="mt-4">
            <div class="form-group">
            <span id="wrong_pass_alert"></span>
                <?php if (isset($_GET['info'])) { ?>
                    <div class="alert alert-danger text-center" role="alert">
                    <?= $_GET['info'] ?>
                    </div>
                    <?php } ?>
                    <?php if (isset($_GET['cek'])) { ?>
                    <div class="alert alert-success text-center" role="alert">
                    <?= $_GET['cek'] ?>
                    </div>
                    <?php } ?>
                  <input
                    type="text"
                    class="form-control"
                    name="username"
                    required=""
                    autocomplete="off"
                    placeholder="Username"
                  />
                </div>
                <div class="form-group mt-2">
                  <input
                    type="text"
                    class="form-control"
                    required=""
                    name="number"
                    pattern="[0-9]+"
                    maxlength="14"
                    placeholder="Mobile number"
                  />
                </div>
                <div class="form-group mt-2">
                  <input type="email"
                  required=""
                  name="email"
                  class="form-control" 
                  placeholder="Email" />
                </div>
                <div class="input-group mt-2">
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                    placeholder="Password"
                    id="inputPassword"
                  />
                </div>
                <div class="input-group mt-2">
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Confirm Password"
                    id="inputPasswordConfirm"
                    onkeyup="validate_password()"
                  />
                </div>
                <div class="d-grid gap-2">
                  <button
                    class="btn mt-2 btn-color-theme"
                    type="submit"
                    name="submit"
                    id="create"
                    onclick="wrong_pass_alert()"
                  >
                   Sign Up
                  </button>
                  <p class="text-center">
                    Sudah punya akun?
                    <a class="text-theme" href="login.php">Sign In</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
          <!-- Register End -->
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
     <script>
        function validate_password() {
            var pass = document.getElementById('inputPassword').value;
            var confirm_pass = document.getElementById('inputPasswordConfirm').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                  = '☒ Samakan Password Anda!!';
                document.getElementById('create').disabled = true;
                document.getElementById('create').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'blue';
                document.getElementById('wrong_pass_alert').innerHTML =
                    '🗹 Password Sama';
                document.getElementById('create').disabled = false;
                document.getElementById('create').style.opacity = (1);
            }
        }
    </script>
</body>
</html>