<?php
// Parámetros de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_moncco";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM cita";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Gestión de Citas Médicas</title>
    <link rel="stylesheet" type="text/css" href="estilo_submit.css">
	
	<div class="container">
	<img src="banner1moncco.jpg" alt="Banner" width="946" height="331">
	<a href="perfil_paciente.php"></a><br>
	</div>
	
</head>

<body>
   <table>
        <h1>AGENDAR NUEVA CITA MEDICA</h1>
		<tr>
		<th>  </th>		
		<th><form id="appointmentForm" action="insert_cita.php" method="post">
				<div class="form-group">
					<label for="id_cita">N° Cita:</label>
					<input type="text" id="id_cita" name="id_cita" required>
				</div>
				<div class="form-group">
					<label for="fecha">Fecha </label>
					<input type="date" id="fecha" name="fecha" required>
				</div>
				<div class="form-group">
					<label for="hora">Hora </label>
					<input type="time" id="hora" name="hora" required>
				</div>
				<div class="form-group">
					<label for="motivo">Motivo:</label>
					<input type="text" id="motivo" name="motivo" required>
				</div>
				<br>			
				<div class="form-group">
					<button type="submit">AGENDAR CITA</button>
				</div>
			</form></th>
			<th>  </th>
		</tr>
	</table>
</body>
</html>