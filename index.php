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
    <title>Lily Putra</title>
  </head>
  <body>
      <!-- navbar -->
      <?php include'inc/header.php'; ?>
        <!-- navbar end -->

        <!-- Scroll -->
        <button class="go-top-btn">
        <img src="assets/img/arrow-up.png" alt="arrow up">
        </button>
       <!-- End Scroll -->

    <!-- Banner Start -->
    <section class="hero container">
      <div class="mt-5">
        <div class="row ms-3">
          <div class="col-md-6">
            <h1 class="fw-bold">
              Lily Putra <br />
              Barber
            </h1>
            <p class="text-muted mt-3">
            Temukan tukang cukur profesional yang membuat rambut Anda terlihat
              <div id="typing">Tampan dan Rapi</div>
             <div id="line">|</div>
            </p>
          </div>
          <div class="col-md-6 mt-2">
            <img
              class="img-banner img-fluid"
              src="assets/img/banner.svg"
              alt="barber logo"
              width="500px"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- Banner End -->

              <!-- Service-->
    <span id='service'></span>
    <section class="popular-barber bg-theme pt-2 pb-2 mt-5">
      <div class="container">
        <div class="row">
          <h3 class="fw-bold ms-3" >
           Daftar
            <span class="text-theme">Layanan</span>
          </h3>
          <hr>
        </div>
        <div class="row mt-3">
          <div class="col-md-4 mt-3">
            <div class="card border-radius-10 p2">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img
                      src="./assets/img/buzz-cut.jpg"
                      width="100"
                      class="border-radius-10 img-fluid"
                      alt="buzz cut"
                    />
                  </div>
                  <div class="col-md-8 mt-2">
                    <a  class="text-decoration-none text-dark">
                      <h5 class="ms-2 fw-bold">Buzz Cut</h5>
                    </a>
                    <small class="ms-2 fw-bold text-theme">Pelanggan</small>
                    <br />
                    <small class="text-muted ms-2"
                      ><i data-feather="map-pin" width="16px"></i>Katapang,
                      Bandung</small
                    >
                  </div>
                </div>
                <h5 class="fw-bold ms-2 mt-4">Paket Basic</h5>
                <div class="row">
                  <span
                    class="badge badge-muted bg-secondary block-badge p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20px"></i>Men's
                    Haricut</span
                  >
                  <span
                    class="badge badge-muted bg-secondary p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20"></i>Kid's
                    Haricut</span
                  >
                  
                </div>
                <h5 class="font-weight-bold price-theme mt-4">Rp. 20.000</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card border-radius-10 p2">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img
                      src="./assets/img/two-block.jpg"
                      width="100"
                      class="border-radius-10 img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="col-md-8 mt-2">
                    <a  class="text-decoration-none text-dark">
                      <h5 class="ms-2 fw-bold">Two block</h5>
                    </a>
                    <small class="ms-2 fw-bold text-theme">Pelanggan</small>
                    <br />
                    <small class="text-muted ms-2"
                      ><i data-feather="map-pin" width="16px"></i>Katapang,
                      Bandung</small
                    >
                  </div>
                </div>
                <h5 class="fw-bold ms-2 mt-4">Paket Basic</h5>
                <div class="row">
                  <span
                    class="badge badge-muted bg-secondary block-badge p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20px"></i>Men's
                    Haricut</span
                  >
                  <span
                    class="badge badge-muted bg-secondary p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20"></i>Kid's
                    Haricut</span
                  >
                </div>
                <h5 class="font-weight-bold price-theme mt-4">Rp. 20.000</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card border-radius-10 p2">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img
                      src="./assets/img/mid-fade.jfif"
                      width="100"
                      class="border-radius-10 img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="col-md-8 mt-2">
                    <a  class="text-decoration-none text-dark">
                      <h5 class="ms-2 fw-bold">Mid Fade</h5>
                    </a>
                    <small class="ms-2 fw-bold text-theme">Pelanggan</small>
                    <br />
                    <small class="text-muted ms-2"
                      ><i data-feather="map-pin" width="16px"></i>Katapang,
                      Bandung</small
                    >
                  </div>
                </div>
                <h5 class="fw-bold ms-2 mt-4">Paket Basic</h5>
                <div class="row">
                  <span
                    class="badge badge-muted bg-secondary block-badge p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20px"></i>Men's
                    Haricut</span
                  >
                  <span
                    class="badge badge-muted bg-secondary p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20"></i>Kid's
                    Haricut</span
                  >
                </div>
                <h5 class="font-weight-bold price-theme mt-4">Rp. 20.000</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card border-radius-10 p2">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img
                      src="./assets/img/taper-fade.jfif"
                      width="100"
                      class="border-radius-10 img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="col-md-8 mt-2">
                    <a  class="text-decoration-none text-dark">
                      <h5 class="ms-2 fw-bold">Taper fade</h5>
                    </a>
                    <small class="ms-2 fw-bold text-theme">Pelanggan</small>
                    <br />
                    <small class="text-muted ms-2"
                      ><i data-feather="map-pin" width="16px"></i>Katapang,
                      Bandung</small
                    >
                  </div>
                </div>
                <h5 class="fw-bold ms-2 mt-4">Paket Basic</h5>
                <div class="row">
                  <span
                    class="badge badge-muted bg-secondary block-badge p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20px"></i>Men's
                    Haricut</span
                  >
                  <span
                    class="badge badge-muted bg-secondary p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20"></i>Kid's
                    Haricut</span
                  >  
                </div>
                <h5 class="font-weight-bold price-theme mt-4">Rp. 20.000</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card border-radius-10 p2">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img
                      src="./assets/img/low-fade.webp"
                      width="100"
                      class="border-radius-10 img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="col-md-8 mt-2">
                    <a  class="text-decoration-none text-dark">
                      <h5 class="ms-2 fw-bold">Low fade</h5>
                    </a>
                    <small class="ms-2 fw-bold text-theme">Pelanggan</small>
                    <br />
                    <small class="text-muted ms-2"
                      ><i data-feather="map-pin" width="16px"></i>Katapang,
                      Bandung</small
                    >
                  </div>
                </div>
                <h5 class="fw-bold ms-2 mt-4">Paket Basic</h5>
                <div class="row">
                  <span
                    class="badge badge-muted bg-secondary block-badge p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20px"></i>Men's
                    Haricut</span
                  >
                  <span
                    class="badge badge-muted bg-secondary p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20"></i>Kid's
                    Haricut</span
                  >
                </div>
                <h5 class="font-weight-bold price-theme mt-4">Rp. 20.000</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-3">
            <div class="card border-radius-10 p2">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img
                      src="./assets/img/french-crop.jfif"
                      width="100"
                      class="border-radius-10 img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="col-md-8 mt-2">
                    <a  class="text-decoration-none text-dark">
                      <h5 class="ms-2 fw-bold">french crop</h5>
                    </a>
                    <small class="ms-2 fw-bold text-theme">Pelanggan</small>
                    <br />
                    <small class="text-muted ms-2"
                      ><i data-feather="map-pin" width="16px"></i>Katapang,
                      Bandung</small
                    >
                  </div>
                </div>
                <h5 class="fw-bold ms-2 mt-4">Paket Basic</h5>
                <div class="row">
                  <span
                    class="badge badge-muted bg-secondary block-badge p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20px"></i>Men's
                    Haricut</span
                  >
                  <span
                    class="badge badge-muted bg-secondary p-2 ps-1 ms-2 pe-1 mt-2"
                    ><i data-feather="scissors" width="20"></i>Kid's
                    Haricut</span
                  >  
                </div>
                <h5 class="font-weight-bold price-theme mt-4">Rp. 20.000</h5>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- Service End -->
    
    
        <!-- Footer -->
        <?php include'inc/footer.php'; ?>
        <!-- Footer end -->
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