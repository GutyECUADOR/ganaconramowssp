<?php
      if (isset($_SESSION["usuarioRUC"])){
            header('location:index.php?action=inicio');  
      }
      try {
            $login = new App\Controllers\loginController();
            $userProfile = $login->logingoogle();

            $usuario = (object) $login->getUserByEmail($userProfile->email);
            if (!empty($usuario->cedula) && !empty($usuario->telefono)) {
                  $login->checkLogin($usuario->cedula, $usuario->telefono);
            }

      } catch (\Throwable $th) {
            header("location: index.php?action=inicio'");  
      }

?>
      <div class="main-container background-confedi" id="app">
            <section class="space-sm">
            <div class="container align-self-start">
            <div class="row">
                  <div class="col text-center">
                  </div>
                  <!--end of col-->
            </div>
            <!--end of row-->
            <div class="row justify-content-center">
                  <div class="col-12 col-md-8 col-lg-7">
                  <div class="card card-lg text-center">
                  <div class="card-body">
                        <div class="mb-2">
                        <img alt="Image" src="assets/img/logo.png" style="width: 40%;"/>
                        <h1 class="h2 mb-2 mt-3">Casi listo :D !</h1>
                        <span>Por favor completa los siguientes datos para finalizar tu registro</span>
                        
                        </div>
                        <div class="row no-gutters justify-content-center">
                        <div class="text-left col-lg-8">
                        <form method="POST" autocomplete="off">
                              <div class="form-group">
                              <label for="cedula">Nombres</label>
                                    <input class="form-control form-control-lg text-uppercase" v-model="cliente.nombres" type="text" name="nombres" id="nombres"/>
                                    <input class="form-control form-control-lg" type="hidden" name="nombres" id="nombres_hidden" value="<?php echo $userProfile->displayName?>"/>
                              </div>
                              <div class="form-group">
                                    <label for="cedula">Email</label>
                                    <input class="form-control form-control-lg" v-model="cliente.email" type="text" name="email" id="email" value=""/>
                                    <input class="form-control form-control-lg" type="hidden" name="email" id="email_hidden" value="<?php echo $userProfile->email?>"/>
                              </div>
                              <div class="form-group">
                                    <label for="cedula">Documento de Identidad</label>
                                    <input class="form-control form-control-lg" v-model="cliente.cedula" type="text" name="cedula" id="cedula" placeholder="Documento de Identidad" />
                              </div>
                              <div class="form-group">
                                    <label for="telefono">Teléfono Celular</label>
                                    <input class="form-control form-control-lg" v-model="cliente.telefono" type="telefono" name="telefono" id="telefono" placeholder="Teléfono" />
                              
                              </small>
                              </div>
                              <div class="text-center mt-3">
                              <button type="button" @click="addNewCliente()" class="btn btn-primary btn-block">Finalizar Registro</button>
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
    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>


    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

      <!-- VUE y Scripts de la pagina-->
    <script src="assets\js\vue.js"></script>
    <script src="assets\js\clases\cliente.js"></script>
    <script src="assets\js\pages\registrosocialnetworks.js?<?php echo date('Ymdhiiss')?>"></script>

