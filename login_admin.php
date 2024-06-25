<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="ad">

	<table>
	<th><img src="background.jpg" alt="bckgrnd"></th>
	<th>
		<div class="login">
        <h1>Inicio de Sesión - Admin</h1>
        <form action="log_adm.php" method="post">
			<img src="logomoncco.jpg" alt="logo" >
            <label for="username">Username_Admin:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Iniciar Sesión</button>
        </form>
		</div>
	</th>
	<th><img src="background.jpg" alt="bckgrnd"></th>
	</table>		
	                  
</div>
</body>
</html>