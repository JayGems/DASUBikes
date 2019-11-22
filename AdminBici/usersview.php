<?php
include('assets/php/session.php');
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="static/css/index.css" href="css/index.css">
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body onload="call()">
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
        <a class="nav-link" href="./index">Salir</a>
      </li>
    </ul>
    <span class="navbar-text">
     Dirección de Apoyo y Seguridad Universitaria
    </span>
  </div>
</nav>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Vista de <b>Usuarios</b></h2>
                    </div>
                    <div class="col-sm-7">
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Bicicleta</th>
                        <th>Rol</th>
                        <th>E-mail</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="demo">
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
