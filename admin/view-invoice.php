<?php 
         include'inc/koneksi.php';
        session_start();
        error_reporting(0);
        if($_SESSION['status']!="login"){
            header("Location: ../login.php?info=Login Terlebih Dahulu!");
        }else{ 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>View Invoice</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link rel="shorcut icon" type="image/png" href="assets/img/logoo.png" />
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
         <!-- ======= Header ======= -->
    <!-- Logo -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="./index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="Logo ">&nbsp; 
        <span class="d-none d-lg-block">Admin Area</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->
 
    <!-- Search Bar -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <!-- End Search Bar -->

    <!-- Search Icon-->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>    
          </a>
        </li>
        <!-- End Search Icon-->

        <!--Profile Iamge Icon -->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile.svg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['username']; ?></span>
          </a>
          <!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['username']; ?></h6>
              <span>Denn | Develop</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="setting.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" onClick="return confirm('Kamu yakin untuk logout?')"href="../logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- End Header -->

  
          <!-- ======= Sidebar ======= -->
    <!--Dashboard -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>   
        </a>
      </li>
      <!-- End Dashboard  -->

      <!--  Service  -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Service</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="service-nav" class="nav-content collapse " data-bs-parent="#service-nav">
          <li>
            <a href="add-service.php">
              <i class="bi bi-circle"></i><span>Add Service</span>
            </a>
          </li>
          <li>
            <a href="manage-service.php">
              <i class="bi bi-circle active"></i><span>Manage Service</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Service  -->

      <!--  Pages  -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pages-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pages-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="about-us.php">
              <i class="bi bi-circle"></i><span>About Us</span>
            </a>
          </li>
          <li>
            <a href="location.php">
              <i class="bi bi-circle active"></i><span>Location</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End pages Nav -->

        <!--  customer Nav -->
        <li class="nav-item"  >
        <a class="nav-link collapsed" href="customer-list.php">
          <i class="bi bi-card-list"></i>
          <span>Customer List</span>
        </a>
      </li>
      <!-- End customer  Nav -->

       <!--  invoices  Nav -->
       <li class="nav-item">
        <a class="nav-link"href="invoices.php">
          <i class="bi bi-envelope"></i>
          <span>Invoices</span>
        </a>
      </li>
      <!-- End invoices  Nav -->
      
      <!--  Settings  -->
      <li class="nav-heading">Settings</li>
      <li class="nav-item">

         <!--  Profile  -->
        <a class="nav-link collapsed" href="setting.php">
          <i class="bi bi-person"></i>
          <span>Settings</span>
        </a>
      </li>
      <!-- End Profile  -->

       <!--  Error  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="404.php">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li>
      <!-- End Error -->

       <!--  Blank  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.php">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li>
      <!-- End Blank -->
    </ul>
  </aside>
  <!-- End Sidebar-->

        <!--  Page Title -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Invoice Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Invoice-Details</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
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
						<h4>Invoice #<?php echo $invid;?></h4>
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
         <!-- Footer -->
      <?php include'inc/footer.php'; ?>
        <!-- Footer end -->
</body>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    <!-- Template cdn fontawesome -->
  <script src="https://kit.fontawesome.com/6acd0a1998.js" crossorigin="anonymous"></script>
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
</html>
<?php }  ?>