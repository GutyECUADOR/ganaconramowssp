 
    <div class="navbar-container">
      <div class="bg-dark navbar-dark" data-sticky="top">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icon-menu h4"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="?action=inicio" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                  <a href="?action=comoparticipar" class="nav-link">Como participar</a>
                </li>
                <li class="nav-item">
                  <a href="?action=terminoscondiciones" class="nav-link">Terminos & Condiciones</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Premios</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Ganadores</a>
                </li>
              
                
              </ul>

              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="?action=login">Inicia Sesión</a>
                </li>
              </ul>

            </div>
            <!--end nav collapse-->
          </nav>
        </div>
        <!--end of container-->
      </div>
    </div>
    
    <div class="main-container" id="app">
      <section class="bg-dark space-sm" data-jarallax data-speed="0.2">
      <div class="container">
          <embed src="assets/img/terminos.pdf" width="100%" height="700px" 
          type="application/pdf">
        </div>
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-6 col-lg-5 section-intro">
            </div>
            <!--end of col-->
            <div class="col-12 col-md-6 col-lg-5 invisible">
              <div class="card">
                <div class="card-body">
                  <div>
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" v-model="cliente.nombres" class="form-control form-control-sm" id="nombre" placeholder="Ingrese su nombre y apellido" maxlength="200">
                    </div>
                    <div class="form-group">
                      <label for="cedula">Fecha de Nacimiento</label>
                      <input type="text" v-model="cliente.fechaNacimiento" class="form-control form-control-sm"  placeholder="Fecha de Nacimiento" data-flatpickr data-alt-input="true">
                    </div>
                 
                    <div class="form-group">
                      <label for="cedula">Cédula</label>
                      <input type="text" v-model="cliente.cedula" class="form-control form-control-sm" id="cedula" placeholder="Ingrese su numero cédula" pattern="[0-9]+">
                    </div>
                    <div class="form-group">
                      <label for="telefono">Teléfono</label>
                      <input type="text" v-model="cliente.telefono" class="form-control form-control-sm" id="telefono" placeholder="Ingrese su numero de Teléfono" pattern="[0-9]+">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" v-model="cliente.email" class="form-control form-control-sm" id="email" placeholder="Indique su email">
                    </div>
                    <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input type="password" v-model="cliente.password" class="form-control form-control-sm" id="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                      <label for="ciudad">Ciudad</label>
                        <select v-model="cliente.ciudad" class="form-control form-control-sm">
                          <option value="">Seleccione por favor</option>
                            <option v-for="ciudad in ciudades" :value="ciudad.id">
                              {{ciudad.ciudad}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="ciudad">Punto de Venta</label>
                        <select v-model="cliente.puntoVenta" class="form-control form-control-sm">
                          <option value="">Seleccione por favor</option>
                            <option v-for="puntoVenta in puntosVenta" :value="puntoVenta.id">
                              {{puntoVenta.puntoVenta}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="nit">NIT</label>
                      <input type="text" v-model="cliente.NIT" class="form-control form-control-sm" id="nit" placeholder="NIT" pattern="[0-9]+">
                    </div>
                    <div class="mb-3">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" v-model="cliente.terminos" class="custom-control-input" value="agree" name="agree-terms" id="check-agree">
                        <label class="custom-control-label text-small" for="check-agree">Acepto todos los <a href="#">Terminos &amp; Condiciones</a>
                        </label>
                      </div>
                    </div>
                    
                    <button @click="addNewCliente()" class="btn btn-success btn-block">Regístrarte en AzulK</button>
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

     
      <!--end of section-->

    
    </div>
