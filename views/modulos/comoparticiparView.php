

<div id="app" class="main-container background-confedi">
  <section >
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <img alt="Image" src="assets/img/logo.png" style="width: 25%;"/>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="icon-menu h4"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php?action=dashboard" class="nav-link custom-link">Mi cuenta</a>
            </li>
            <li class="nav-item">
              <a href="index.php?action=comoparticipar" class="nav-link custom-link">Como participar</a>
            </li>
            <li class="nav-item">
              <a href="index.php?action=premios" class="nav-link custom-link">Premios</a>
            </li>
            
          </ul>

          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index.php?action=ranking" class="nav-link custom-link">Ranking</a>
            </li>
            <li class="nav-item">
              <a href="#" data-toggle="modal" data-target="#terminosModal" class="nav-link custom-link">Términos & Condiciones</a>
            </li>
            <li class="nav-item">
              <a href="index.php?action=logout" class="nav-link custom-link">Cerrar Sesión</a>
            </li>
          </ul>

        </div>
        <!--end nav collapse-->
      </nav>
    
      <div class="row flex-md-row card card-lg border-0">
        <div class="col-12 col-md-4 card-body text-center text-light" style="background:#266fbf">
          <img alt="Image" src="assets/img/avatar-female-1.jpg" class="mb-3 avatar avatar-xlg" />
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
        <div class="col-12 col-md-3">
          <div class="container">
              <div class="text-left">
                <h2 class="h2 mb-3 mt-3" style="font-weight:bold; color:#266fbf; line-height: 2rem">SON MÁS DE </br> MIL PREMIOS</h2>
              </div>
            <div class="row text-left">
                <img alt="Image" src="assets/img/premios.png" class="img-fluid rounded" style="display: block;margin-left: auto;margin-right: auto;" />  
            </div>
           
          </div>
        </div>
        <div class="col-12 col-md-5">
          <div class="container">
            <div class="embed-responsive embed-responsive-16by9 mb-3" style="border-width: 4px; margin-top:5%">
                        <iframe class="embed-responsive-item" style="border: 6px solid #CCCCCC" src="https://www.youtube.com/embed/zpOjyy-n8?rel=0"></iframe>
                    </div>
           
          </div>
        </div>
        <!--end of col-->
        
        <!-- col celeste-->
        <div class="container col-12 card-body text-center text-light" style="background:#50c2f6">
          <div class="row">
            <div class="col-4">
              <h4 class="h4 text-left" style="font-weight:bold; color:#266fbf; line-height: 1.3rem; margin-bottom: 1px!important;">1. Guarda tus facturas</h4>
              <p class="text-left" style="font-size: 1.2rem; line-height: 20px;">de tus compras de productos Ramo, realizadas entre el 15 de febrero y el 15 de marzo.</p>
            </div>
            <div class="col-4">
              <h4 class="h4 text-left" style="font-weight:bold; color:#266fbf; line-height: 1.3rem; margin-bottom: 1px!important;"; margin-bottom: 1px!important;>2. Tómale una foto </h4>
              <p class="text-left" style="font-size: 1.2rem; line-height: 20px;">a la factura y envíala por WhatsApp al 322 354 2797.</p>
            </div>
            <div class="col-4">
              <h4 class="h4 text-left" style="font-weight:bold; color:#266fbf; line-height: 1.3rem; margin-bottom: 1px!important;">3. Acumula el mayor número</h4>
              <p class="text-left" style="font-size: 1.2rem; line-height: 20px;">de puntos ,por cada mil pesos acumulas 1 punto, y podrás ganar fabulosos premios.</p>
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
