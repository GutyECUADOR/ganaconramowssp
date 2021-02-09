
    <!-- Modal Producto -->
    <?php require_once 'sis_modules/navbar.php'?>
    
    <div class="main-container background-confedi" id="app">
      <section>
        <div class="container">
            <div class="row justify-content-center text-center section-intro text-light">
                 <div class="col-12">
                    <img alt="Image" src="assets/img/logo.png" style="width: 40%;"/>
                    <span class="display-4 lead text-uppercase" style="text-shadow: rgb(8, 0, 0) 2px 2px;" data-aos="fade-up" data-aos-delay="100">Sigue estos sencillos pasos y </br> estarás participando.</span>
                </div>
            </div>
              
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <img src="assets/img/paso1.png" style="width: 80%;" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
                           
                        </div>
                         <div class="col-lg-12 mb-3">
                            <img src="assets/img/paso2.png" style="width: 80%;" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
                            
                        </div>
                         <div class="col-lg-12 mb-3">
                            <img src="assets/img/paso3.png" style="width: 80%;" class="img-responsive center-block d-block mx-auto" alt="Sample Image">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="embed-responsive embed-responsive-16by9 mb-3" style="border-width: 4px; margin-top:15%">
                        <iframe class="embed-responsive-item" style="border: 6px solid #CCCCCC" src="https://www.youtube.com/embed/zpOjyy-n8?rel=0"></iframe>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <span class="display-5 lead text-light">Mayor información sobre la mecánica haz clic <a href="#" data-toggle="modal" data-target="#mecanicasModal" class="nav-link">AQUÍ</a></span>
                </div>

            </div>
          <!--end of row-->  

       
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->

      <!-- Modal Producto -->
     

     <!-- Modal Producto -->
     <?php require_once 'modals/terminosModal.php'?>
     <?php require_once 'modals/mecanicasModal.php'?>
     <!-- Modal Producto
     

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
