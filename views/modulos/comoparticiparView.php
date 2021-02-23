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
    
      <div class="row flex-md-row card card-lg border-0">
        <div class="col-12 col-md-4 card-body text-center text-light" style="background:#266fbf">
            <img alt="Image" src="https://ui-avatars.com/api/?bold=true&color=266fbf&background=f2ce3e&name=<?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY]?>" class="mb-3 avatar avatar-lg" />
            <div class="media">
            <div class="media-body">
              <div class="mb-3">
                <h1 class="h2 mb-2"><?php echo $_SESSION["usuario_nombres".APP_UNIQUE_KEY] ?></h1>
                <span class="text-muted"><?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?></span>
                
                <input type="hidden" id="cedulaHidden" value="<?php echo $_SESSION["usuario_cedula".APP_UNIQUE_KEY] ?>"/>
                <span class="h5 mt-2">
                </span>
              </div>
            </div>
          </div>
        </div>
        <!--end of col-->
        <div class="col-12 col-md-8">

            <div class="container">
              <div class="row">
                <div class="col-12 col-md-4">
                    <div class="text-left">
                      <h2 class="h2 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">SON MÁS DE MIL PREMIOS</h2>
                    </div>
                  <div class="row text-left">
                      <p class="h6 p-2 text-uppercase" style="line-height: 20px; font-size: 1.2rem;">¿Cómo puedes participar y ganar fabulosos premios?</h2>
                      <img alt="Image" src="assets/img/premios.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto;" />  
                  </div>
                
                </div>
                <div class="col-12 col-md-8 d-flex align-items-center">
                  <div class="embed-responsive embed-responsive-16by9 mb-3" style="border-width: 4px; margin-top:5%">
                    <iframe class="embed-responsive-item" style="border: 6px solid #CCCCCC" src="https://youtube.com/embed/cKG3BZgn4oY"></iframe>
                </div>
              </div>
              
            </div>
            </div>
            <div class="col-12">
              <div class="container">
                <small style="margin-bottom: 15px;">Promoción válida del 15 de Febrero al 15 de Marzo de 2021. *Número total de premios: 7 Play Station 5 y 1095 bonos c/u de $35.000, que podrán ser de: Netflix, Spotify o Panamericana. Aplican términos y condiciones</small>
              
              </div>
            </div>

        </div>

        <!--end of col-->
        
        <!-- col celeste-->
        <div class="container col-12 card-body text-center text-light" style="background:#50c2f6">
          <div class="row">
            <div class="col-12 col-md-4 p-0">
              <div class="mycontainer">
                <div class="row">
                    <div class="col-1">
                    <spam style="font-family: FuturaStdExtraBoldOblique; font-size: 3rem; color:#266fbf;">1</spam>
                </div>
                <div class="col" style="padding-left: 30px;">
                  <h4 class="h4 text-left" style="font-weight:bold; color:#266fbf; line-height: 1.3rem; margin-bottom: 1px!important;">Guarda las facturas</h4>
                  <p class="text-left" style="font-size: 1.2rem; line-height: 20px;">de tus compras de productos Ramo, realizadas entre el 15 de Febrero y el 15 de Marzo.</p>
                </div>
              </div>
            </div>
              
              
            </div>
            <div class="col-12 col-md-4 p-0" style="padding-left: 15px !important;border-left: 2px solid #266fbf;">
              <div class="mycontainer">
                <div class="row">
                    <div class="col-1">
                    <spam style="font-family: FuturaStdExtraBoldOblique; font-size: 3rem; color:#266fbf;">2</spam>
                </div>
                <div class="col" style="padding-left: 30px;">
                  <h4 class="h4 text-left" style="line-height: 1.3rem; margin-bottom: 1px!important; font-size: 1.3rem;">Tómale una foto a la factura</h4>
                  <p class="text-left" style="color:#266fbf; font-size: 1.3rem; line-height: 23px; font-weight: bold;">y envíala por WhatsApp al 322 354 2797</p>
                </div>
              </div>
            </div>
            
          </div>
          
        
            <div class="col-12 col-md-4 p-0" style="padding-left: 15px !important;border-left: 2px solid #266fbf;">
              <div class="mycontainer">
                <div class="row">
                    <div class="col-1">
                    <spam style="font-family: FuturaStdExtraBoldOblique; font-size: 3rem; color:#266fbf;">3</spam>
                </div>
                <div class="col" style="padding-left: 30px;">
                  <h4 class="h4 text-left" style="font-weight:bold; color:#266fbf; line-height: 1.3rem; margin-bottom: 1px!important; font-size: 1.3rem;">Acumula el mayor número</h4>
                  <p class="text-left" style="font-size: 1.2rem; line-height: 20px;"><spam style="font-weight:bold; color:#266fbf; line-height: 1.3rem; margin-bottom: 1px!important; font-size: 1.3rem;">de puntos,</spam> por cada mil pesos acumulas 1 punto, y podrás ganar fabulosos premios.</p>
                </div>
              </div>
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
</div>
<!-- Modal Terminos -->
<?php require_once 'modals/terminosModal.php'?>

<?php require_once 'modals/whatsapp.php'?>

<!-- Required vendor scripts (Do not remove) -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<script>
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover()
    $("#whatspopover").popover("show");
    $("#tiendaramopopover").popover("show");
  });
</script>
