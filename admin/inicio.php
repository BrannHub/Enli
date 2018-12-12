<?php
  $pagina = "Inicio";
  $active_inicio = "active";
 ?>
<?php include('../php/datos.php'); ?>
<html>
<head>
  <title><?php echo $nombreapp; ?> | <?php echo $pagina; ?></title>
  <?php include('php/head.php'); ?>
</head>
<body>
<?php include('php/nav.php'); ?>
  <div class="content">
     <div class="container-fluid">
       <h1>Hola</h1>
     </div>
  </div>
<?php include('php/footer.php'); ?>
</body>
</html>
