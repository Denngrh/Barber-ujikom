<?php
	session_start();
  error_reporting(0);
  include 'inc/koneksi.php';
   if($_SESSION['status']!="login"){
            header("Location: ../login.php?info=Login Terlebih Dahulu!");
        }
	if($_POST['submit']){
		$password_lama			= $_POST['password'];
		$password_baru			= $_POST['newpassword'];
		$konfirmasi_password	= $_POST['renewpassword'];
		$password_lama	= md5($password_lama);
		$cek = $conn->query("SELECT password FROM admin WHERE password='$password_lama'");
		if($cek->num_rows){
			if(strlen($password_baru) >= 5){
				if($password_baru == $konfirmasi_password){
					$password_baru 	= md5($password_baru);
					$username 		= $_SESSION['username']; 
					
					$update = $conn->query("UPDATE admin SET password='$password_baru' WHERE username='$username'");
					if($update){
            header("Location: setting.php?test=Password berhasil di rubah");
					}else{
            header("Location: setting.php?info=Gagal Merubah Password!!");
					}					
				}else{
          header("Location: setting.php?info=Samakan password!!");
				}
			}else{
        header("Location: setting.php?info=Minimal password 5 karakter!!");
			}
		}else{
      header("Location: setting.php?info=Password lama tidak cocok!!");
		}
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Setting - Admin Area</title>
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="customer-list.php">
          <i class="bi bi-card-list"></i>
          <span>Customer List</span>
        </a>
      </li>
      <!-- End customer  Nav -->

       <!--  invoices  Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="invoices.php">
          <i class="bi bi-envelope"></i>
          <span>Invoices</span>
        </a>
      </li>
      <!-- End invoices  Nav -->
      
      <!--  Settings  -->
      <li class="nav-heading">Settings</li>
      <li class="nav-item">

         <!--  Profile  -->
        <a  class="nav-link" href="setting.php">
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

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Settings</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Setting</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Change Password</button>
                </li>
              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                   <!-- Change Password Form -->
                                <form action="" method="post">
                                   <!-- alert merah -->
                                <?php if (isset($_GET['info'])) { ?>
                                <div class="alert alert-danger text-center" role="alert">
                                <?= $_GET['info'] ?>
                                </div>
                                <?php } ?>
                                 <!-- end alert merah -->

                              <!-- alert biru -->    
                                <?php if (isset($_GET['test'])) { ?>
                                <div class="alert alert-primary text-center" role="alert">
                                <?= $_GET['test'] ?>
                                </div>
                                <?php } ?>
                         <!-- end alert biru -->
                          <div class="row mb-3">
                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="password" type="password" class="form-control" id="currentPassword">
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="newpassword" type="password" class="form-control" id="newPassword">
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                            <div class="col-md-8 col-lg-9">
                              <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                            </div>
                          </div>

                          <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Change Password</button>
                          </div>
                          </form>
                          <!-- End Change Password Form -->
                      </div>
              </div>
              <!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

   <!-- Footer -->
   <?php include'inc/footer.php'; ?>
        <!-- Footer end -->
</body>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>