<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" data-toggle="modal" data-target="#modal_productoDetail"><?php echo APP_NAME; ?></a>
      
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenido, <?php echo $_SESSION["usuarioNOMBRE".APP_UNIQUE_KEY] ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
            
            <li><a href="?action=logout">Cerrar Sesion </a></li>
            
          </ul>
        </li>
           
      </ul>
      
      
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>