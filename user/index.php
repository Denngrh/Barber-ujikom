<?php
session_start();
error_reporting(0);
include('inc/koneksi.php');
session_start();
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
            </h1>
            <p class="text-muted mt-3">
           Anda dapat melihat history pembayaran
              <div id="typing">Anda senang kami tenang</div>
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
                    <form action="../proses/user-contact.php"method="post">
                    <?php if (isset($_GET['info'])) { ?>
                    <div class="alert alert-success text-center" role="alert">
                    <?= $_GET['info'] ?>
                    </div>
                    <?php } ?>
                        <div class="row">
                        <div class="twice-two col-6">
                            <input type="text" class="form-control" style="height: 50px;" name="name" id="name" placeholder="Nama Lengkap" required autocomplete="off"><br>
                        </div>
                        <div class="twice-two col-6">
                            <input type="email" class="form-control" style="height: 50px;" class="form-control" placeholder="Email" required name="email"><br>
                        </div>
                        </div>
                        <textarea class="form-control message"  style="height: 138px;" id="pesan" name="pesan" maxlength="500" placeholder="Pesan" required=""></textarea>
                        <button type="submit" class="btn btn-outline-theme pe-4 ps-4 pt-2 mt-3" name="submit">Kirim Pesan</button>
                    </form>
                </div>
            </div>
          </div>
          <!-- Contact End -->

          <!-- invoices -->
          <span id="invoices"></span>
          <div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
        <div class="table-responsive bs-example widget-shadow">
						<table class="table table-bordered mt-3">
            <h4 style="padding-bottom: 20px;text-align: center;color: blue;">Invoice History</h4>
                        <thead> 
                          <tr align="center"> 
								<th>#</th> 
								<th>Invoice Id</th> 
								<th>Customer Name</th>
                <th>Customer Number</th>  
								<th>Invoice Date</th> 
								<th>Action</th>
							</tr> 
							</thead> <tbody>
                        <?php
                        $ret=mysqli_query($conn,"SELECT distinct users.nama,users.number,tblinvoice.BillingId,date(tblinvoice.PostingDate) as invoicedate from  users   
                            join tblinvoice on users.id=tblinvoice.Userid where users.id ='$_SESSION[id]' order by tblinvoice.ID desc");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                        ?>
						 <tr align="center"> 
						 	<th scope="row"><?php echo $cnt;?></th> 
						 	<td><?php  echo $row['BillingId'];?></td>
						 	<td><?php  echo $row['nama'];?></td>
               <td><?php  echo $row['number'];?></td>
						 	<td><?php  echo $row['invoicedate'];?></td> 
						 		<td><a href="invoice-history.php?invoiceid=<?php  echo $row['BillingId'];?>" class="btn btn-primary">View</a>
						 		</td> 
						  </tr>   <?php 
                    $cnt=$cnt+1;
                    }?></tbody> 
                    </table> 
					</div>
				</div>
			</div>
		</div>
  </main>
 <!-- end invoices -->
                    

           <!-- profile Start -->
     <span id='profile'></span>
    <section class="about mt-5 pd-5" id="profile">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-6">
            <img src="assets/img/profile.svg" width="400px" class="img-fluid" alt="profile Image" />
          </div>
          <div class="col-md-6">
            <h2 class="fw-bold">
            Users Profile
            </h2>
            <hr>
            <div class="map-content-9 mt-lg-0 mt-4">
                    <form action="update-profile.php"method="post">
                    <?php
                                    $ret=mysqli_query($conn,"select *from  users where users.id ='$_SESSION[id]'");
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {
                                    ?>
                        <div class="row">
                        <div class="twice-two">
                            <input type="text" class="form-control" style="height: 50px;" name="name" id="name" placeholder="Nama" value="<?php  echo $row['nama'];?>"><br>
                        </div>
                        <div class="twice-two">
                            <input type="text" class="form-control" style="height: 50px;" class="form-control" placeholder="Number"  value="<?php  echo $row['number'];?>" readonly name="number"><br>
                        </div>
                        <div class="twice-two">
                            <input type="email" class="form-control" style="height: 50px;" class="form-control" placeholder="Email"  value="<?php  echo $row['email'];?>" readonly name="enail"><br>
                        </div>
                        <div class="twice-two">
                            <input type="text" readonly class="form-control" style="height: 50px;" class="form-control" placeholder="Number"  value="<?php  echo $row['RegDate'];?>" name="date"><br>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-outline-theme pe-4 ps-4 pt-2" name="submit">Update Profile</button>
                        <?php } ?> 
                       </form>
                </div>
            </div>
          </div>
          <!-- profile End -->


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
