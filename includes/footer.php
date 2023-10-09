<style>


.sparkle {
  position: absolute;
  width: 10px;
  height: 10px;
  background-color:#00FF00; /* Set the color of your sparkling balls */
  border-radius: 50%;
  animation: sparkle 2s linear infinite; /* Adjust the animation duration as needed */
  margin-left: 10%;
}

.sparkle1 {
  position: absolute;
  width: 10px;
  height: 10px;
  background-color: #00FF00; /* Set the color of your sparkling balls */
  border-radius: 50%;
  animation: sparkle 2s linear infinite; /* Adjust the animation duration as needed */
  margin-left: 92%;
  margin-top: 23%;
}

@keyframes sparkle {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
  const sparkles = document.querySelectorAll(".sparkle");
  sparkles.forEach((sparkle) => {
    sparkle.style.left = Math.random() * 100 + "%";
    sparkle.style.top = Math.random() * 10 + "%";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const sparkles = document.querySelectorAll(".sparkle1");
  sparkles.forEach((sparkle) => {
    sparkle.style.left = Math.random() * 100 + "%";
    sparkle.style.top = Math.random() * 10 + "%";
  });
});

</script>
<section class="jss13 wow fadeInUp" data-wow-delay="0.1s">
    <div class="MuiTypography-root MuiTypography-body1 wave css-9l3uo3"><svg data-name="Layer 1"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                class="shape-fill"></path>
        </svg></div>

    <div class="footer-3">
    <div class="sparkle"></div>
  <!-- <div class="sparkle1"></div> -->
        <div class="container-fluid  text-light footer mt-5 pt-5 ">
            <div class="container py-5">
                <div class="row g-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-light mb-4">Address</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><a href="" class="foot-info">123
                                Street, New York, USA</a></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><a href="" class="foot-info">+012 345
                                67890</a></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><a href=""
                                class="foot-info">info@example.com</a></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-light mb-4">Services</h5>
                        <a class="btn btn-link" href="">Website Development</a>
                        <a class="btn btn-link" href="">Mobile App Development</a>
                        <a class="btn btn-link" href="">Desktop App Development</a>
                        <a class="btn btn-link" href="">Web App Development</a>
                        <a class="btn btn-link" href="">IT Support</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-light mb-4">Quick Links</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> -->
                </div>
            </div>
            <div class="container wow fadeInRight" data-wow-delay="0.5s">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://vaikartan.com">Diktel Campus</a>, All Right
                            Reserved.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <!-- </div> -->


</section>