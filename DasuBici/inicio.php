<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Registro Bici</title>
	<meta charset="UTF-8"/>
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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" >
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

<div class="container mt-5">

    <div class="container mt-5">
        <div class="row">
            <div class="col m-auto">
                <h2>¿Qué es ?</h2>
                <p>
                    P.
                </p>
            </div>
            <img class="col imagen-inicio" src="static/img/user.png" alt="portada">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <!--<div class="title">
                <i class="ico-app icon-check-circle"></i>
                <h4>Sencillo</h4>
            </div>
            <p>
                L.
            </p>
        </div>
        <div class="col">
            <div class="title">
                <i class="ico-app icon-sliders"></i>
                <h4>Adaptable</h4>
            </div>
            <p>
                L.
            </p>
        </div>
        <div class="col">
            <div class="title">
                <i class="ico-app icon-shield"></i>
                <h4>Seguro</h4>
            </div>
            <p>
                L.
            </p>
        </div>-->
    </div>
</div>

<footer class="footer mt-5 text-center">
    <p class="m-0">Todos los derechos reservados &copy; 2019</p>
</footer>
</body>
</html>
