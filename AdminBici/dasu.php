<?php
include('assets/php/session.php');
?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
  <title>Registro DASU</title>
  <meta charset="UTF-8" />
  <!--JQUERY-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Los iconos tipo Solid de Fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Nuestro css-->
  <link rel="stylesheet" type="text/css" href="static/css/index.css" href="css/index.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./inicio">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./dasu">Registro DASU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./usuarios">Registro Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./bici">Registro Bicicleta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./usersview">Ver Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./assets/php/logout">Salir</a>
        </li>
      </ul>
      <span class="navbar-text">
        Dirección de Apoyo y Seguridad Universitaria
      </span>
    </div>
  </nav>

  <div class="container d-flex justify-content-centeralign-items-center flex-column mt-5">
    <div class="title-pag">
      <h3 class="text-center mt-2">Rellene los datos para el registro de DASU</h3>
      <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
          <div class="modal-content">
            <h4>Datos</h4>
            <form action="registro.php" method="POST">
              <div class="form-group">
                <label>Clave</label>
                <input class="form-control " type="text" name="clave" placeholder="000000" required />
              </div>

              <div class="form-group">
                <label>Nombre de Usuario</label>
                <input type="text" class="form-control" name="username" placeholder="Nombre de Usuario" />
              </div>
              <div class="form-group">
                <label>Email</label>
                <input class="form-control " type="text" name="email" placeholder="example@mail.com" required />
              </div>

              <div class="form-group">
                <label>Contraseña</label>
                <input class="form-control " type="text" name="psswd" placeholder="Contraseña" required />
              </div>

              <label><input class="btn btn-primary" type="submit" value="Registrar"></input></label>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>