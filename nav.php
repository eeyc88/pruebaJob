<?php 
  require('funciones.php');
  session_start();
  if (isset($_SESSION['nombre']) && !empty($_SESSION['nombre'])) {
    $usuario_activo = $_SESSION['nombre'];
  }
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <?php

          $actual = obtenerScriptActual($_SERVER['REQUEST_URI'],2);

          MostrarAlerta($actual);
          if($actual != 'registro.php'){

            if(empty($usuario_activo)){
              echo "<li><button id='myBoton' ><span class='glyphicon glyphicon-log-in'></span> Login</button></li>";
            }else{
              echo "<li><p style='color:#ffffff'>Bienvenido ".$usuario_activo."</p></li>";
              echo "<li><button id='cerrar' ><a href='cerrar.php' class='glyphicon glyphicon-log-in'>Logout</a></button></li>";
            }
          }

        ?>


        		
      </ul>
    </div>
  </div>
</nav>