<!DOCTYPE html>
<html lang="en">
<?php
  include('header.php');
  include('conexion.php');
  $sql = "SELECT * FROM tipo_proveedor";
  $resultado = $con->query($sql);
  $proveedores = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<body>

<?php
  include('nav.php');
?>


<div class="container text-center">

  <h3>What We Do</h3><br>


  <div class="row">
    <form action="registrarUsuario.php" method="POST">
      <label>Usuario</label>
      <input required type="text" name="usuario"><br>
      <label>Password</label>
      <input required type="text" name="password"><br>
      <label>Teléfono</label>
        <input type="text" id="telefono" name="telefono"><br>
        <label>Correo</label>
        <input type="text" id="correo" name="correo"><br>
      <label>Seleccione el tipo de cuenta</label>
      <select id="tipo_cuenta" required name="opcion">
        <option value="usuario_normal" name="tipo" id="usuario_normal">usuario</option>
        <option value="empresa" name="tipo" id="empresa">empresa</option>
        <option value="proveedor" name="tipo" id="proveedor">proveedor</option>
      </select><br><br>

      <!--Pilas creamos otro DIV--> 

      <div id="campos_usuario">
        <label>Nombres</label>
        <input type="text" id="nombres" name="nombres"><br>
        <label>Apellidos</label>
        <input type="text" id="apellidos" name="apellidos"><br>
        <label>Cedula</label>
        <input type="text" id="cedula" name="cedula"><br>
      </div>

      <div id="campos_empresa">
        <label>Organización</label>
        <input type="text" id="organizacion" name="organizacion"><br>
        <label>RUC</label>
        <input type="text" id="ruc" name="ruc"><br>  
      </div>

      <div id="campos_proveedor">
        <label>Proveedor</label>
        <input type="text" id="proveedor" name="nombre_prov"><br>
        <label>Dirección</label>
        <input type="text" id="direccion" name="direccion_prov"><br>
        <label>Tipo:</label>
        <select name="tipo_prov">
          <?php
            foreach ($tipo_proveedores as $tipoProveedor => $tipo) { ?>
              <option><?php echo $tipoProv['tipo']; ?></option>
            <?php } ?>
          ?>
          <option value="alimentos" name="tipo" id="alimentos">ALIMENTOS</option>
          <option value="utilitarios" name="tipo" id="utilitarios">UTILITARIOS</option>
          <option value="electronica" name="tipo" id="electronica">ELECTRÓNICA</option>
          <option value="salud" name="tipo" id="salud">SALUD</option>
        </select><br><br>
        <label>RUC</label>
        <input type="text" id="ruc_prov" name="ruc_prov"><br>
      </div>

      <input type="submit" value="Enviar Información">
    </form>
  </div>
</div><br>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</body>
<script type="text/javascript" src="./js/registro.js"></script>
</html>
