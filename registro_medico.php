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
        <h1>REGISTRO DE MEDICO</h1>
		<tr>
		<th>  </th>		
		<th><form id="appointmentForm" action="insert_medico.php" method="post">
				<div class="form-group">
					<label for="cedulaMedico">Cédula:</label>
					<input type="text" id="cedulaMedico" name="cedulaMedico" required>
				</div>
				<div class="form-group">
					<label for="nombreMedico">Nombres:</label>
					<input type="text" id="nombreMedico" name="nombreMedico" required>
				</div>
				<div class="form-group">
					<label for="apellidoMedico">Apellidos:</label>
					<input type="text" id="apellidoMedico" name="apellidoMedico" required>
				</div>
				<!--- <div class="form-group">
					<label for="especialidad">Especialidad:</label>
					<input type="text" id="especialidad" name="especialidad" required>
				</div> --->
				<div class="form-group">
					<label for="telefonoMedico">Teléfono:</label>
					<input type="text" id="telefonoMedico" name="telefonoMedico" required>
				</div>
				<div class="form-group">
					<label for="emailMedico">E-mail:</label>
					<input type="text" id="emailMedico" name="emailMedico" required>
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