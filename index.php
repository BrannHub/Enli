<?php
  $pagina = "Inicio de sesión";
 ?>
<?php include('php/datos.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <?php include('php/head.php'); ?>
  <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard/assets/css/argon.min.css?v=1.0.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard/assets/vendor/nucleo/css/nucleo.css">
  <link rel="stylesheet" type="text/css" href="https://demos.creative-tim.com/paper-dashboard/assets/demo/demo.css">
  <title><?php echo $nombreapp; ?> | <?php echo $pagina; ?></title>
</head>
<body style="background-color:#0581c4;">
      <!-- Header -->
    <div style="background-color:#036296;" class="header py-3 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-4">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white" style="font-size:202%;"><?php echo $nombreapp; ?></h1>
              <p class="text-white">Acceso al sistema</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-3">
              <div class="text-muted text-center mt- mb-3"><small>Ingresa con</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img style="width:20px;height:20px;" src="https://cdn.worldvectorlogo.com/logos/facebook-2.svg"></span>
                  <span class="btn-inner--text">Facebook</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="https://demos.creative-tim.com/argon-dashboard/assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-4 py-lg-4">
              <div class="text-center text-muted mb-4">
                <small>O con tus credenciales</small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Recordarme</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Ingresar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="recuperar.php" class="text-light"><small>¿Olvidaste tu contraseña?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="registro.php" class="text-light"><small>Crear una nueva cuenta</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
  <?php include('php/footer.php'); ?>
</html>
