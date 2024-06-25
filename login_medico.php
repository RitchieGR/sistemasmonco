<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Médico</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="ad">

	<table>
	<th><img src="background.jpg" alt="bckgrnd"></th>
	<th>
		<div class="login">
        <h1>Inicio de Sesión - Médico </h1>
        <form action="log_med.php" method="post">
			<img src="logomoncco.jpg" alt="logo" >
            <label for="id_medico">Cédula Médico:</label>
            <input type="text" id="id_medico" name="id_medico" required>
            <label for="contrasena_hash">Contraseña:</label>
            <input type="contrasena_hash" id="contrasena_hash" name="contrasena_hash" required><br>
            <button type="submit">Iniciar Sesión</button>
        </form>
		</div>
	</th>
	<th><img src="background.jpg" alt="bckgrnd"></th>
	</table>		
	                  
</div>
</body>
</html>
