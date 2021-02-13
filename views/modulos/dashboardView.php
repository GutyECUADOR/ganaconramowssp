<?php
if (!isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=login");  
 }   
?> 

    <div id="app" class="main-container background-confedi">
      <section >
        <div class="container">
          <div class="row flex-md-row card card-lg border-0">
            <div class="col-12 col-md-4 card-body text-center text-light" style="background:#266fbf">
              <img alt="Image" src="assets/img/avatar-female-1.jpg" class="mb-3 avatar avatar-xlg" />
              <div class="media">
                
                <div class="media-body">
                  <div class="mb-3">
                    <h1 class="h2 mb-2">MARÍA DANIELA CUERVO APARICIO</h1>
                    <span class="text-muted">1032421643</span>

                    <span class="h5 mt-2">Mi cuenta</span>
                    <span class="h5 mt-2">Cómo participar</span>
                    <span class="h5 mt-2">Premios</span>
                    <span class="h5 mt-2">Términos y Condiciones</span>
                    <span class="h5 mt-2"><a style="font-size:1.3rem" href="index.php?action=logout">Cerrar Sesión</a></span>
                    
                   
                  </div>
                  
                  <div>
                  </div>
                </div>
              </div>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-8 card-body">
              <div>
                <div class="text-center">
                  <h3 class="h3 text-left text-bold">Mis Puntos</h3>
                  <img alt="Image" src="img/corazon.png" style="width: 40%;"/>
                </div>
               
                <div class="card border-0">
                <div class="card-header card-header-borderless d-flex justify-content-between">
                  <h5>Mis transacciones</h5>
                </div>
                <div class="card-body">
                  <table class="table align-items-center">
                    <thead>
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Punto de Venta</th>
                        <th scope="col">Factura</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Puntos</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr v-for="transaccion in transacciones" class="text-small">
                        <td>{{ transaccion.fecha }}</td>
                        <td>{{ transaccion.puntoVenta }}</td>
                        <td>{{ transaccion.factura }}</td>
                        <td>{{ transaccion.valor|nodecimal }}</td>
                        <td>{{ transaccion.kilos|nodecimal }}</td>
                      </tr>

                     

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
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