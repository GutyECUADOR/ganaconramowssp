<?php
if (!isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=login");  
 }   
?> 

     <!-- NavBar Admin -->
     <?php require_once 'sis_modules/navbar.php'?>
     
    <div class="main-container background-confedi" id="app">
      <section class="space-sm h-100">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
              <div class="card card-profile-large text-center border-0 text-light" style="background: #0596de1a; margin-top:50%">
                
                <div class="card-body" style="padding: 0 !important;">
                  <div class="my-3" style="margin-top: 4.5rem !important;">
                    <div class="mb-2">
                    <img alt="Image" src="assets/img/logo.png" style="width: 100%;"/></br>
                     
                      <h4 class="mb-0 text-uppercase"><?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY] ?></h4>
                      <span class="text-muted"><?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?></span>
                      <input id="cedulaHidden" name="cedulaHidden" type="hidden" value="<?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?>">
                    </div>
                  </div>
                  
                </div>
              </div>
              <!-- end card -->
              
            </div>
            <!--end of col-->
            <div class="col-12 col-md-8 text-light  text-center">
              <div class="card" style="background: #0295dc;">
                <div class="card-header card-header-borderless d-flex justify-content-center">
                  <p class="h3 text-uppercase mt-2" style="margin-bottom: 0;">¡ Tu corazón late por ganar ! </p>
                </div>
                <div class="card-body">
                  <div class="media">
                    <div class="media-body text-center">
                      <img alt="Image" src="assets/img/balanza.gif" width="80%" />
                      <p class="h4 text-uppercase mt-2" style="margin-bottom: 0;"> Tus puntos acumulados</p>
                      <div class="container-balanza">
                        
                       <h3 style="color: black!important; font-weight: 400; font-size: 1.2rem;" class="display-4" data-aos="zoom-out" data-aos-delay="100">{{totalKilos|checkPuntos}} puntos</h3>
                      </div>
                       <p class="h4"> Entre más compras acumules, </br> más oportunidades de ganar tendrás.</p>
                    </div>
                  </div>
                </div>

              <div class="card border-0" style="background: #0596ded9;">
                <div class="card-header card-header-borderless d-flex justify-content-between">
                  <h5>Mis transacciones</h5>
                </div>
                <div class="card-body text-light">
                  <table class="table align-items-center">
                    <thead>
                      <tr>
                        <th class="text-light" scope="col">Fecha</th>
                        <th class="text-light" scope="col">Punto de Venta</th>
                        <th class="text-light" scope="col">Factura</th>
                        <th class="text-light" scope="col">Valor</th>
                        <th class="text-light" scope="col">Puntos</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr v-for="transaccion in transacciones" class="text-small">
                        <td class="text-light">{{ transaccion.fecha }}</td>
                        <td class="text-light">{{ transaccion.puntoVenta }}</td>
                        <td class="text-light">{{ transaccion.factura }}</td>
                        <td class="text-light">{{ transaccion.valor|nodecimal }}</td>
                        <td class="text-light">{{ transaccion.kilos|nodecimal }}</td>
                      </tr>

                     

                    </tbody>
                  </table>
                </div>
               
              </div>
              <!--end of card-->
              
            </div>

            
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
     
      <!-- Modal Terminos -->
      <?php require_once 'modals/terminosModal.php'?>

      <!-- Whatsapp button  -->
      <?php require_once 'modals/whatsapp.php'?>
    </div>

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

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

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

     <!-- VUE y Scripts de la pagina-->
    <script src="assets\js\vue.js"></script>
    <script src="assets\js\pages\dashboard.js"></script>