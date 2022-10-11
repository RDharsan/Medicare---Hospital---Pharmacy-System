<footer class="text-center text-lg-start bg-white text-muted">
  <script src="index.js"></script>
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

    <br><br>

    <!-- <div>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 link-grayish">
        <i class="fab fa-github"></i>
      </a>
    </div> -->

  </section>

  <section class="">
    <div class="container text-center text-md-start mt-5">

      <div class="row mt-3">

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-grayish"></i>Medicare
          </h6>
          <p>
            Medicare Hospital is a leading private healthcare institution with superior with world class facilities in the heart of Sri Lanka!!!
          </p>
        </div>



        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Quick Links
          </h6>
          <p>
            <a href="#!" class="text-reset">About us</a>
          </p>
          <p>
            <a href="https://facebook.com/" class="text-reset">Medicare Facebook</a>
          </p>
          <p>
            <a href="https://www.instagram.com/" class="text-reset">Medicare Instagram</a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
        </div>



        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact </h6>
          <p><i class="fas fa-home me-3 text-grayish"></i>Address: no.108, St.Marine street, colombo 06</p>
          <p>
            <i class="fas fa-envelope me-3 text-grayish"></i>
            Email: medicarehospital@gmail.com, medicarehospital@yahoo.com
          </p>

          <p><i class="fas fa-phone me-3 text-grayish"></i> +94 77 857 9965, +94 76 985 7856, +94 11 258 9657</p>
          <p><i class="fas fa-print me-3 text-grayish"></i></p>
          <p><i class="fas fa-print me-3 text-grayish"></i> </p>
        </div>

      </div>

    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2022 Website:
    <a class="text-reset fw-bold" href="https://courseweb.sliit.lk/login/index.php">www.medicarehosiptals.com</a>
  </div>
  <!-- Copyright -->

 
</footer>
<!-- Footer -->

<?php
  if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
  ?>
    <script>
      swal({
        title:"<?php echo $_SESSION['status'];?>",
        icon:"<?php echo $_SESSION['status'];?>",
        button:"OK Done",
      });
    </script>

  <?php
    unset($_SESSION['status']);
  }
  ?>