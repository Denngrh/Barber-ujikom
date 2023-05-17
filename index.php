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
    
     <!-- Contact Start -->
     <span id='contact'></span>
    <section class="about mt-5 pd-5" id="contact">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-6">
            <img src="assets/img/aboutBarber.svg" width="500px" class="img-fluid" alt="contact Image" />
          </div>
          <div class="col-md-6">
            <h2 class="fw-bold">
             Kontak
            </h2>
            <hr>
            <div class="map-content-9 mt-lg-0 mt-4">
                    <form action="proses/proses.php"method="post">
                    <?php if (isset($_GET['info'])) { ?>
                    <div class="alert alert-success text-center" role="alert">
                    <?= $_GET['info'] ?>
                    </div>
                    <?php } ?>
                        <div class="twice-two">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required autocomplete="off"><br>
                        </div>
                        <div class="twice-two">
                            <input type="email" class="form-control" class="form-control" placeholder="Email" required name="email"><br>
                        </div>
                        <textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan" required=""></textarea>
                        <button type="submit" class="btn btn-outline-theme pe-4 ps-4 pt-2 mt-3" name="submit">Kirim Pesan</button>
                    </form>
                </div>
            </div>
          </div>
          <!-- Contact End -->

           <!-- FAQ Start -->
           <span id='faq'></span>
          <div class="row ">
            <div class="col-md-6 mt-5">
                <h1 class="fw-bold mt-5">Pertanyaan yang Sering Diajukan
                  <span class="text-theme">(F.A.Q)</span>
                </h1>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNol">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNol" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <p>
                          Berapa harga potongan rambut di Lily Putra?
                        </p>
                      </button>
                    </h2>
                    <div id="flush-collapseNol" class="accordion-collapse collapse" aria-labelledby="flush-headingNol" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Harga potongan bervariasi tergantung jenis potongan yag diinginkan.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <p>
                       Apakah disini ada mencuci rambut?
                        </p>
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Lily Putra barbershop cenderung tidak melakukan itu, jadi jika rambut Anda telah selesai anda bisa langsung pulang.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <p>
                          Apakah kita bisa langsung ketempat tanpa booking?
                        </p>
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Tentu saja Lily putra barbershop bisa langsung ke tempat tanpa harus booking, tetapi cenderung menunggu dengan yang lain,untuk efisiensi waktu sebaiknya booking terlebih dahulu.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <p>
                      Apa yang harus dilakukan jika tidak puas dengan hasil potongan rambut?
                    </p>
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Sebaiknya langsung berbicara dengan penata rambut untuk memperbaiki potongan rambut dan mencari solusi yang memuaskan kedua belah pihak.</div>
                    </div>
                  </div>
                </div>
                <a
              href="https://scribehow.com/shared/Cara_Menavigasi_Situs_Web_untuk_Lily_Putra_Barbershop__xN6gZKy8T0ucjvPY35BXDQ"
              class="btn btn-outline-theme pe-4 ps-4 pt-2 mt-3"
              >Panduan pengguna
            </a>
            </div>
            <div class="col-md-6">
              <img src="assets/img/aboutBarber 2.svg" width="600px" class="img-fluid"alt="About Image">
            </div>
          </div>
          <!-- FAQ End -->

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