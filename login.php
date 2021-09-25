<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="fondo.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>INVERSIONES CAMPOS VALLE</title>
  <link href="sistema/img/logo.jpeg" rel="icon">
  <link href="sistema/img/logo.jpeg" rel="apple-touch-icon">

  <!-- Fuentes personalizadas para esta plantilla-->
  <link href="sistema/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Estilos personalizados para esta plantilla-->
  <link href="sistema/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body >
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <img src="sistema/img/logo.jpeg" class="img-thumbnail">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Iniciar Sesión</h1>
                  </div>
                  <form class="user" method="POST">
                    <?php echo isset($alert) ? $alert : ""; ?>
                    <div class="form-group">
                        <label for="my-usuario"><strong>Usuario</strong></label>
                        <input id="my-input" class="form-control" type="text" name="usuario"
                            placeholder="Ingrese su usuario">
                    </div>
                    
                      <div class="form-group">
                        <label for="my-input"><strong>Contraseña</strong></label>
                        <input id="my-input" class="form-control" type="password" name="contraseña"
                            placeholder="Ingrese su contraseña">
                    </div>
                    <input type="submit" value="Iniciar" class="btn btn-primary">
                    <hr>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
 




<!-- Bootstrap core JavaScript-->
<script src="sistema/vendor/jquery/jquery.min.js"></script>
  <script src="sistema/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="sistema/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="sistema/js/sb-admin-2.min.js"></script>




</body>











</html>