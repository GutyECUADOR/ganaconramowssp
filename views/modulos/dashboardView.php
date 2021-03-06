<?php
if (!isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=login");  
 }   

 require_once './views/modulos/sis_modules/promo_banner.php';
?> 

    <div id="app" class="main-container background-confedi">
      <section >
        <div class="container">
          
          <!--navbar-->
          <?php require_once 'sis_modules/header_main.php'?>

          <!--navbar-->
          <?php require_once 'sis_modules/navbarnotop.php'?>

          <div class="row flex-md-row card card-lg border-0 mb-0">
            <div class="col-12 col-md-4 text-center text-light" style="background:#266fbf">
              <div class="container">
                <div class="row" style="min-height: 300px;">
                  <div class="container mt-4">
                    <img alt="Image" src="https://ui-avatars.com/api/?bold=true&color=266fbf&background=f2ce3e&name=<?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY]?>" class="mb-3 avatar avatar-lg" />
                      <div class="media">
                      <div class="media-body">
                        <div class="mb-3">
                          <h1 class="h2 mb-2"><?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY] ?></h1>
                          <span class="text-muted"><?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?></span>
                          
                          <input type="hidden" id="cedulaHidden" value="<?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?>"/>
                          <span class="h5 mt-2">
                            <?php 
                              if ($_SESSION["usuario_rol".APP_UNIQUE_KEY] == '99') {
                                  echo '<a href="?action=puntos" style="font-size:1.3rem">Asignación de Puntos</a>';
                              }
                              ?>
                          </span>
                          
                        
                        </div>
                        
                        <div>
                        </div>
                      </div>
                    </div>
                  </div>
                    
                </div>
                <div class="row" style="position: absolute; bottom: 0; width: 100%;">
                  <div class="col-12 card-body text-center text-dark" style="background: rgb(242, 206, 62); padding: 10px;">
                    <div class="col-12">
                      <div class="container">
                        <div class="row">
                          <small>Por cada MIL PESOS COP $1,000.oo en compras entre el 15 de Febrero - hasta el 15 de Marzo de 2021 en Productos Ramo, el participante recibirá UN (1) punto.</small>
                        </div>
                        
                      </div>
                  </div>
                </div>
                </div>
              </div>

                
            </div>
            <!--end of col-->
              
            <div class="col-12 col-md-8 card-body">
              <div>
                <div class="text-center">
                  <h3 class="h3 text-left text-bold">Mis Puntos</h3>
                  <div class="container-balanza">
                      <h3 style="color: #ffdc00 !important; font-weight: bold; font-size:2.5rem" class="display-4" data-aos="zoom-out" data-aos-delay="100">{{totalKilos}} PTS.</h3>
                  </div>
                </div>
              
                <div class="card border-0 terms-box">
                <div class="card-header-borderless d-flex justify-content-between">
                  <h5>Mis transacciones</h5>
                </div>
                <div class="">
                  <table class="table align-items-center">
                    <thead>
                      <tr>
                        <th scope="col" style="font-size: 1rem">Fecha</th>
                        <th scope="col" style="font-size: 1rem">Punto de Venta</th>
                        <th scope="col" style="font-size: 1rem">Factura</th>
                        <th scope="col" style="font-size: 1rem">Valor</th>
                        <th scope="col" style="font-size: 1rem">Cantidad</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr v-for="transaccion in transacciones" class="text-small">
                        <td style="min-width: 100px;">{{ transaccion.fecha }}</td>
                        <td style="min-width: 100px;">{{ transaccion.nombre }}</td>
                        <td style="min-width: 100px;">{{ transaccion.factura }}</td>
                        <td style="min-width: 100px;">{{ transaccion.valor }}</td>
                        <td style="min-width: 100px;">{{ transaccion.kilos }}</td>
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
    <!-- Modal Terminos -->
    <?php require_once 'modals/terminosModal.php'?>

    <?php require_once 'modals/whatsapp.php'?>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

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