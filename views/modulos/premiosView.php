<div id="app" class="main-container background-confedi">
  <section >
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <img alt="Image" src="assets/img/logo.png" style="width: 25%;"/>
        </div>
      </div>

      <!--navbar-->
      <?php require_once 'sis_modules/navbarnotop.php'?>
    
      <div class="row flex-md-row card card-lg border-0 mb-0">
        <div class="col-12 col-md-4 card-body text-center text-light" style="background:#266fbf">
            <img alt="Image" src="https://ui-avatars.com/api/?bold=true&color=266fbf&background=f2ce3e&name=<?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY]?>" class="mb-3 avatar avatar-xlg" />
            <div class="media">
            <div class="media-body">
              <div class="mb-3">
                <h1 class="h2 mb-2"><?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY] ?></h1>
                <span class="text-muted"><?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?></span>
                
                <input type="hidden" id="cedulaHidden" value="<?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?>"/>
                <span class="h5 mt-2">
                </span>
                
              
              </div>
              
              <div>
              </div>
            </div>
          </div>
        </div>
        
        <!--end of col-->
        <div class="col-12 col-md-4">
          <div class="container">
              <div class="text-center">
                <h2 class="h2 mb-3 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">CONSOLAS </br>PLAY STATION 5</h2>
              </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/play5.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 40%;" />  
            </div>
            <!--end of row-->
            <div class="container mt-3 m-4">
                <span class="text-uppercase text-dark " style="font-weight: bold">
                  Son
                </span>
                <h2 class="h2 mb-2" style="font-weight:bold; color:#266fbf; line-height: 2rem">7 CONSOLAS</h2>
                <span class="mb-3 text-uppercase text-dark">
                  Para las personas que más acumulen puntos.
                </span>
              </div>
          </div>
        </div>
        <div class="col-12 col-md-4" style="background-color:#50c2f6">
          <div class="container">
              <div class="text-center">
                <h2 class="h2 mb-3 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">BONOS </br>DIGITALES</h2>
              </div>
            <div class="row text-center">
                <img alt="Image" src="assets/img/bonos.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto; width: 85%;" />  
            </div>
            <!--end of row-->
            <div class="container mt-3 m-4">
              <div class="col">
                  <span class="text-uppercase text-dark " style="font-weight: bold">
                    Son
                  </span>
                  <h2 class="h2 mb-2" style="font-weight:bold; color:#266fbf; line-height: 2rem">1095 BONOS</h2>
                  <span class="mb-3 text-uppercase text-dark">
                    Por un valor de $35.000 pesos para disfrutar
                  </span>
              </div>
                
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