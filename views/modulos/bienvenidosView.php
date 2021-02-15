<div class="main-container" style="background-image:  url('assets/img/bienvenidos.jpg'); background-size: cover; height: 100%;  background-position-x: 25%;">
  <section class="fullwidth-split" >
    <div class="container">
      <div class="row no-gutters height-100">
        <div class="container">
            <div class="row justify-content-between align-items-center" style="margin-top:40%;">
                <div class="col-12 col-md-6 mb-8">
                </div>
                <!--end of col-->
                <div class="col-12 col-lg-5 mb-4 text-center text-md-right">
                    <h1 class="text-light text-uppercase" style="text-shadow: rgb(8, 0, 0) 1px 1px; color: #feb221 !important; font-size:4rem">¡Bienvenido!</h1>
                    <h2 class="lead text-light" style="text-shadow: rgb(8, 0, 0) 1px 1px;">Envia tus facturas por compras de Ramo realizadas, <spam style="color:#ffeb00;">entre el 15 de Febrero y el 15 de Marzo al WhatsApp 3223542797</spam> Y acumula puntos para llevarte consolas o bonos.</h2>
            
                <div>
                    <a href="?action=login" class="btn btn-primary" style="background-color: #f2ce3e; color:black;"><i class="icon-login"></i> Ingresar</a>
                    <a href="?action=register" class="btn btn-primary" style="background-color: #f2ce3e; color:black;">Registrarme</a>
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-video">
                      Video
                    </button> -->
                </div>

                </div>
                <!--end of col-->
                <div class="col-lg-8 mb-3 offset-lg-4 text-right d-none d-md-block d-lg-block">
                  <small class="text-white mt-3">Promoción válida del 15 de febrero al 15 de marzo de 2021. *Número total de premios: 7 Play Station 5 y 1095</br> bonos c/u de $35.000, que podrán ser de: Netflix, Spotify o Panamericana. Aplican términos y condiciones</small>
                
                </div>
                
            </div>
            
            <!--end of row-->
        </div>
        <!--end of container-->
        
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->
  <!-- Whatsapp button  -->
  
  <!-- Modal -->
  <div class="modal fade" id="modal-video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content border-0" style="background-color: #0000;">
        <div class="">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="font-size:5rem">&times;</span>
          </button>
        </div>
        <div class="">
          <div class="embed-responsive embed-responsive-16by9 mb-3" style="border-width: 4px; margin-top:5%; border-radius: 5px;">
            <iframe class="embed-responsive-item" style="border: 6px solid #CCCCCC" src="https://youtube.com/embed/cKG3BZgn4oY?autoplay=1&controls=1&mute=1"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once 'modals/whatsapp.php'?>

</div>

     <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript">
      $(window).on('load', function() {
          $('#modal-video').modal('show');

          $("#modal-video").on('hidden.bs.modal', function (e) {
            $("#modal-video iframe").attr("src", $("#modal-video iframe").attr("src"));
        });
      });
</script>
    
    
   