<?php
session_start();
error_reporting(0);
include('inc/koneksi.php');
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
     <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./assets/img/logo.png" alt="Logo" width="38" height="35"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                href="index.php"
                class="nav-link btn btn-outline-theme ps-3 pe-3"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                href="index.php"
                class="nav-link btn btn-outline-theme ps-3 pe-3"
                >kontak</a 
              >
            </li>
            <li class="nav-item">
              <a
                href="index.php"
                class="nav-link btn btn-outline-theme ps-3 pe-3"
                >Invoices History</a
              >
            </li>
            <li class="nav-item">
              <a
                href="index.php"
                class="nav-link btn btn-outline-theme ps-3 pe-3"
                >Profile</a
              >
            </li>
            <li class="nav-item">
              <a
                onClick="return confirm('Kamu yakin untuk logout?')"
                href="logout.php"
                class="nav-link btn btn-color-theme ps-3 pe-3"
                >Logout</a
              >
            </li>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

        <!-- Scroll -->
        <button class="go-top-btn">
        <img src="assets/img/arrow-up.png" alt="arrow up">
        </button>
       <!-- End Scroll -->

    <!-- Banner Start -->
    <section class="hero container">
    <div id="page-wrapper">
			<div class="main-page">
				<div class="tables" id="exampl">
        <div class="table-responsive bs-example widget-shadow">
						<table class="table table-bordered mt-3">
                        <?php
                    $invid=intval($_GET['invoiceid']);
                $ret=mysqli_query($conn,"select DISTINCT  date(tblinvoice.PostingDate) as invoicedate,users.nama,users.email,users.number,users.RegDate
                    from  tblinvoice 
                    join users on users.id=tblinvoice.Userid 
                    where tblinvoice.BillingId='$invid'");
                $cnt=1;
                while ($row=mysqli_fetch_array($ret)) {
                ?>				
					<div class="table-responsive bs-example widget-shadow">
						<h4 class="mt-3">Invoice #<?php echo $invid;?></h4>
						<table class="table table-bordered" width="100%" border="1"> 
                            <tr>
                            <th colspan="6">Customer Details</th>	
                            </tr>
                                       <tr> 
								<th>Name</th> 
								<td><?php echo $row['nama']?></td> 
								<th>Contact no.</th> 
								<td><?php echo $row['number']?></td>
								<th>Email </th> 
								<td><?php echo $row['email']?></td>
							</tr> 
							 <tr> 
								<th>Registration Date</th> 
								<td><?php echo $row['RegDate']?></td> 
								<th>Invoice Date</th> 
								<td colspan="3"><?php echo $row['invoicedate']?></td> 
							</tr> 
                                    <?php }?>
                                    </table> 
                                    <table class="table table-bordered" width="100%" border="1"> 
                                    <tr>
                                    <th colspan="3">Services Details</th>	
                                    </tr>
                                    <tr>
                                    <th>#</th>	
                                    <th>Service</th>
                                    <th>Cost</th>
                                    </tr>
                                    <?php
                                    $ret=mysqli_query($conn,"select tblservices.ServiceName,tblservices.Cost  
                                        from  tblinvoice 
                                        join tblservices on tblservices.ID=tblinvoice.ServiceId 
                                        where tblinvoice.BillingId='$invid'");
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {
                                        ?>
                                    <tr>
                                    <th><?php echo $cnt;?></th>
                                    <td><?php echo $row['ServiceName']?></td>	
                                    <td><?php echo $subtotal=$row['Cost']?>K</td>
                                    </tr>
                                    <?php 
                                    $cnt=$cnt+1;
                                    $gtotal+=$subtotal;
                                    } ?>
                                    <tr>
                                    <th colspan="2" style="text-align:center">Grand Total</th>
                                    <th><?php echo $gtotal?>K</th>	
                                    </tr>
                                    </table>
                                    <p style="margin-top:1%"  align="center">
                                    <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
                                    </p>
					</div>
				</div>
			</div>
		</div>
  </main>
    </section>
    <!-- Banner End -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace();
    </script>
      <script src="https://kit.fontawesome.com/6acd0a1998.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
      <script>
function CallPrint(strid) {
var prtContent = document.getElementById("exampl");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>
  </body>
</html>
