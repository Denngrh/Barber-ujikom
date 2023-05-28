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
                href="./index.php"
                class="nav-link btn btn-outline-theme ps-3 pe-3"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                href="#contact"
                class="nav-link btn btn-outline-theme ps-3 pe-3"
                >kontak</a 
              >
            </li>
            <li class="nav-item">
              <a
                href="#invoices"
                class="nav-link btn btn-outline-theme ps-3 pe-3"
                >Invoices History</a
              >
            </li>
            <li class="nav-item">
              <a
                href="#profile"
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