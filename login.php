<?php
?>
<div id="popup" class="mypopup">
	<div id="contenido">
		<span id="close">
			X
		</span>
		<form action="validacion.php" method="POST">
			<label>Usuario: </label>
			<input type="text" name="usuario"><br>
			<label>Passwrod: </label>
			<input type="text" name="password"><br>
			<!-- -->
			<input type="submit" value="Iniciar Sesión">
			<input type="reset" value="Resetear">
			<br><br>
			<p>No tienes una cuenta en el siustema?</p>
			<p><a href="registro.php">Registrate</a></p>
		</form>


	</div>

</div>