<?php 

use App\Controllers\loginController;

    if (isset($_SESSION["usuarioRUC"])){
        header('location:index.php?action=inicio');  
    }
    
    $login = new loginController();
    $cedula = isset($_POST["cedula"]) ? $_POST["cedula"] : '';
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : '';

    require_once './views/modulos/sis_modules/promo_banner.php';
?>

    <div class="main-container background-confedi-gradient">
      <section class="space-sm">
        <div class="container align-self-start">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
              <div class="card card-lg text-center border-0">
                <div style="background: #266fbf;">
                  <div class="pr-2">
                    <a href="?action=bienvenidos" class="float-right text-white" aria-hidden="true" style="font-size:2rem">&times;</a>
                  </div>
               
                <img alt="Image" src="assets/img/logoconrayas.png" style="width: 40%;"/>
                </div>

                <div class="card-body">
                  <div class="mb-2">
                    
                    <h1 class="h2 mb-2 mt-2" style="font-weight: bold !important; color: #fe7011">¡HOLA!</h1>
                    <span class="text-uppercase" style="font-weight: bold !important; color: #fe7011">Ingresa a tu cuenta y revisa tus puntos</span>
                   
                  </div>
                  <div class="row no-gutters justify-content-center">
                    <div class="text-left col-lg-8">
                      <form method="POST" autocomplete="off">
                        <?php 
                          $login->checkLogin($cedula, $telefono); 
                        
                        ?>
                        <div class="form-group">
                          <label for="cedula" style="color: #266fbf !important;">Documento de Identidad</label>
                          <input class="form-control form-control-lg" type="text" name="cedula" id="cedula" placeholder="Documento de Identidad" required />
                        </div>
                        <div class="form-group">
                          <label for="telefono" style="color: #266fbf !important;">Teléfono Celular</label>
                          <input class="form-control form-control-lg" type="telefono" name="telefono" id="telefono" placeholder="Teléfono" required/>
                         
                          </small>
                        </div>
                        <div class="text-center mt-3">
                          <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <div class="text-center mt-3">
                          <a href="?action=loginfacebook" class="btn btn-block btn-social btn-facebook text-center text-light">
                            <span class="fa fa-facebook"></span> Ingresa con Facebook
                          </a>
                          <a href="?action=logingoogle" class="btn btn-block btn-social btn-google text-center text-light">
                            <span class="fa fa-google"></span> Ingresa con Google
                          </a>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <span>¿No tienes una cuenta? <a href="?action=register">Crea una aqui</a>
                            </span>
                        </div>
                      </form>
                    </div>
                    
                  </div>
                  <!--end of row-->
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
          $("#tiendaramopopover").popover("show");
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

      
