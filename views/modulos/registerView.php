<?php
if (isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=dashboard");  
 }   
?> 
    
    <!-- NavBar -->
    <?php require_once 'sis_modules/navbar.php'?>
    
    <div class="main-container" id="app">
      <section class="bg-dark" data-jarallax data-speed="0.2">
        <img alt="Image" src="assets/img/fondo2.jpg" class="bg-image" />
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-6 col-lg-5 section-intro text-center">
              <img alt="Image" src="assets/img/logo.png" style="width: 100%;"/>
              <span class="text-center text-white" style="text-shadow: 2px 2px #080000; font-size: 1.3rem;">
               ¿Listo para ganar fabulosos premios? </br> Regístrate en nuestra promoción, compra productos Ramo y acumula puntos para participar.
              </span>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-6 col-lg-5">
              <div class="card">
                <div class="card-body">
                  <div>
                    <h5>REGÍSTRATE AQUÍ CON TUS DATOS</h5>
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" v-model="cliente.nombres" class="form-control form-control-sm text-uppercase" id="nombre" placeholder="Ingrese su nombre y apellido" maxlength="200">
                    </div>
                    
                    <div class="form-group">
                      <label for="cedula">Documento de Identidad</label>
                      <input type="text" v-model="cliente.cedula" class="form-control form-control-sm" id="cedula" placeholder="Ingrese su numero de documento" pattern="[0-9]+" maxlength="13">
                    </div>
                    <div class="form-group">
                      <label for="cedula">Confirmar Documento de Identidad</label>
                      <input type="text" v-model="cliente.confcedula" class="form-control form-control-sm" id="confcedula" placeholder="Confirme su Documento de Identidad" pattern="[0-9]+" maxlength="13">
                    </div>

                    <div class="form-group">
                      <label for="telefono">Teléfono celular</label>
                      <input type="text" v-model="cliente.telefono" class="form-control form-control-sm" id="telefono" placeholder="Ingrese su numero de Teléfono" pattern="[0-9]+" maxlength="10">
                    </div>
                    <div class="form-group">
                      <label for="telefono">Confirmar Teléfono celular</label>
                      <input type="text" v-model="cliente.conftelefono" class="form-control form-control-sm" id="conftelefono" placeholder="Confirme su numero de Teléfono" pattern="[0-9]+" maxlength="10">
                    </div>

                    <div class="form-group">
                      <label for="email">Email (Opcional)</label>
                      <input type="email" v-model="cliente.email" class="form-control form-control-sm" id="email" placeholder="Indique su email" maxlength="50">
                    </div>
                    <div class="mb-3">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" v-model="cliente.terminos" class="custom-control-input" value="agree" name="agree-terms" id="check-agree">
                        <label class="custom-control-label" for="check-agree">Acepto todos los <a href="#" data-toggle="modal" data-target="#terminosModal">Terminos &amp; Condiciones</a>
                        </label>
                      </div>
                    </div>
                    
                    <button @click="addNewCliente()" class="btn btn-success btn-block">Regístrarme en la promoción</button>
                  </div>
                </div>
              </div>
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
    <script type="text/javascript" src="assets/js/moment.js"></script>

    <script type="text/javascript" src="assets/js/jquery-modal-video.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    <!-- VUE y Scripts de la pagina-->
    <script src="assets\js\vue.js"></script>
    <script src="assets\js\clases\cliente.js"></script>
    <script src="assets\js\pages\registro.js"></script>