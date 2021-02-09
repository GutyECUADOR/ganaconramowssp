
    <!-- Modal Producto -->
    <?php require_once 'sis_modules/navbar.php'?>
    
    <div class="main-container background-confedi" id="app">
      <section>
        <div class="container text-light">
          <div class="row justify-content-center text-center section-intro">
            <div class="col-12 col-md-9 col-lg-8">
              <img alt="Image" src="assets/img/logo.png" style="width: 65%;"/>
                <span class="display-5 lead text-light mt-4" style="text-shadow: rgb(8, 0, 0) 3px 2px; font-size:2rem">
                    Al finalizar la promoción el 15 de marzo de 2021,  publicaremos en esta sección los resultados. </br></br> Consulta aquí si eres uno de los 1102 ganadores.
                </span>
                
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->

        </div>

        

      </section>


     <!-- Modal Producto -->
     <?php require_once 'modals/terminosModal.php'?>

      <!-- Whatsapp button  -->
      <?php require_once 'modals/whatsapp.php'?>

     
      <!-- Required vendor scripts (Do not remove) -->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/popper.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.js"></script>

      <script>
        $(function () {
          $('[data-toggle="popover"]').popover()
          $("#whatspopover").popover("show");
        })
     
      </script>
    
      <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
      <script type="text/javascript" src="assets/js/aos.js"></script>
      <!-- Flatpickr (calendar/date/time picker UI) -->
      <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
      <!-- Flickity (handles touch enabled carousels and sliders) -->
      <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
      <!-- jarallax (parallax effect and video backgrounds) -->
      <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
      <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
      <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
      <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
      <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
      <!-- jQuery smartWizard facilitates steppable wizard content -->
      <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
      <!-- Smooth scroll (animation to links in-page)-->
      <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
      <!-- Prism (displays formatted code boxes) -->
      <script type="text/javascript" src="assets/js/prism.js"></script>
      <script type="text/javascript" src="assets/js/zoom.min.js"></script>

      <!-- Required theme scripts (Do not remove) -->
      <script type="text/javascript" src="assets/js/theme.js"></script>
    </div>
