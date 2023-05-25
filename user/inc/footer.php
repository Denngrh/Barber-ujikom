 <!-- Footer Start -->
 <section class="footer bg-theme ps-3 pe-3">
      <div class="container">
        <div class="row">
          <div class="col-md-5 ">
          <span id='about'></span>
          <?php
          $ret=mysqli_query($conn,"select * from tblpage where PageType='aboutus' ");
          $cnt=1;
          while ($row=mysqli_fetch_array($ret)) {
          ?>
            <img src="./assets/img/logo.png" width="38" alt="Logo barber"> <span class="fw-bold"><?php  echo $row['PageTitle'];?></span>
            <p class="text-muted"><?php  echo $row['PageDescription'];?></p><?php } ?>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="fw-bold">tautan langsung</h6>
            <ul class="list-group list-unstyled">
            <li class="pb-2"><a href="#contact" class="text-muted text-decoration-none">Kontak</a></li>
            <li class="pb-2"><a href="#faq" class="text-muted text-decoration-none">F.A.Q</a></li>
            <li class="pb-2"><a href="#location" class="text-muted text-decoration-none">Lokasi</a></li> 
            </ul>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="fw-bold">Beberapa tautan</h6>
            <ul class="list-group list-unstyled">
              <li class="pb-2"><a href="./error/error.html" class="text-muted text-decoration-none">Cookie Police</a></li>
              <li class="pb-2"><a href="./error/error.html" class="text-muted text-decoration-none">Support</a></li>
            </ul>
          </div>
          <div class="col-md-2">
            <h6 class="fw-bold">Office</h6>
            <p class="text-muted">barberlily23@gmail.com<br>
            Indonesia, Earth</p>
          </div>
          <hr>
        </div>
        <p class="text-center mt-2">Copyright &copy; <strong><span class="text-theme"></span>2023,</strong> All right reserved | Denngrh Develop</p>
      </div>
    </section>
    <!-- Footer End -->