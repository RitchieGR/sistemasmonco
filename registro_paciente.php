<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Gestión de Citas Médicas</title>
    <link rel="stylesheet" type="text/css" href="estilo_submit.css">
</head>

<body>
   <table>
        <h1>REGISTRO DE PACIENTE</h1>
		<tr>
		<th>  </th>		
		<th><form id="appointmentForm" action="crear_user.php" method="post">
				<div class="form-group">
					<label for="cedulaPaciente">Cédula:</label>
					<input type="text" id="cedulaPaciente" name="cedulaPaciente" required>
				</div>
				<div class="form-group">
					<label for="nombrePaciente">Nombres:</label>
					<input type="text" id="nombrePaciente" name="nombrePaciente" required>
				</div>
				<div class="form-group">
					<label for="apellidoPaciente">Apellidos:</label>
					<input type="text" id="apellidoPaciente" name="apellidoPaciente" required>
				</div>
				<div class="form-group">
					<label for="fechanacPaciente">Fecha de Nacimiento:</label>
					<input type="date" id="fechanacPaciente" name="fechanacPaciente" required>
				</div>
				<div class="form-group">
					<label for="direccionPaciente">Dirección:</label>
					<input type="text" id="direccionPaciente" name="direccionPaciente" required>
				</div>
				<div class="form-group">
					<label for="telefonoPaciente">Teléfono:</label>
					<input type="text" id="telefonoPaciente" name="telefonoPaciente" required>
				</div>
				<div class="form-group">
					<label for="emailPaciente">E-mail:</label>
					<input type="text" id="emailPaciente" name="emailPaciente" required>
				</div><br>
				<div class="form-group">
					<button type="submit">REGISTRAR PACIENTE</button>
				</div>
			</form></th>
			<th>  </th>
		</tr>
	</table>
</body>
</html>
