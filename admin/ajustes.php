<?php
  $pagina = "Ajustes";
  $active_ajustes = "active";
 ?>
<?php include('../php/datos.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <?php include('../php/head.php'); ?>
  <?php include('estilos/estilos.php'); ?>
  <title><?php echo $nombreapp; ?> | <?php echo $pagina; ?></title>
</head>
    <?php include('../php/nav.php'); ?>
<body>
    
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-6">
      <div class="container-fluid">
        <div class="header-body">
          
          
        
        </div>
      </div>
    </div>

  <div class="container-fluid mt--7">
      <div class="row ">
        <div class="col-md-12 mb-2">
          <div class="card">
            <div class="card-body justify-content-center">
              <center>
              <h2 class="mb-0 font-weight-bold"><img style="width:100px; height:100px;" src="https://i.imgur.com/l14twX8.png">&nbsp;&nbsp;&nbsp;Elias Astrada</h2>
              </center>
              <hr>
              <div class="card-profile-stats justify-content-center d-flex">
                <div class="mt--4 mb--3">
                  <h1 class="">22</h1>
                  <span class="description">Friends</span>
                </div>
                <div class="mt--4 mb--3">
                  <h1 class="">22</h1>
                  <span class="description">Photos</span>
                </div>
                <div class="mt--4 mb--3">
                  <h1 class="">22</h1>
                  <span class="description">Comments</span>
                </div>
            </div>  
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Mi cuenta</h3>
                </div>
               
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Información de usuario</h6>
                <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Nombre</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Apellido</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Correo Electrónico</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="elias@example.com">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Información de contacto</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Dirección</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="" value="" type="text">
                        <small>Formato: Ciudad, Estado o Provincia, País</small>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">Número de teléfono</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Número de celular</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="" value="">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Código postal</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>                
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <br><br><br>
</body>
  <?php include('../php/footer.php'); ?>
</html>
