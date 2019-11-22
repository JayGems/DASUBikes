<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Acceso</title>
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
    <link rel="stylesheet" type="text/css" href="AdminBici/static/css/index.css" href="css/index.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarText">
    <span class="navbar-text">
     Dirección de Apoyo y Seguridad Universitaria
    </span>
  </div>
</nav>
    <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
					<a href="./AdminBici/login.php">
                    <img src="user.png" src="@{user.png}" />
					</a>
					<h2 style="margin-top:10px;">DASU</h2>
                </div>                
            </div>
        </div>
    </div>
	<div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
					<a href="./DasuBici/login.php">
					<img src="admin.png" src="@{admin.png}"/>
					</a>
					<h2 style="margin-top:10px;">Administrador</h2>
                </div>                
            </div>
        </div>
    </div>
</body>
</html>
