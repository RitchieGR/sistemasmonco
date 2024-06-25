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

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Citas Médicas</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <header>
        <h1>Sistema de Gestión de Citas Médicas</h1>
    </header>
    <div class="container">
    	<thead>
			<table>
                <tr>
					
                    <th>
						<div class="ad">
						<h2>BIENVENIDOS A NUESTRO SISTEMA WEB</h2><br>
						<img src="bannermoncco.jpg" alt="Banner" width="587" height="345">
						<p>Sistema de citas medicas odontológicas especializadas MONCO</p>
						</div>
					</th>
					
					<th>
						<div class="login">
						<h2>Inicio de Sesión</h2><br>
						<form action="login.php" method="post"><br>
							<input type="text" id="cedulaPaciente" name="cedulaPaciente" placeholder="Cédula Paciente" required><br>
							<input type="password" id="contrasena_hash"name="contrasena_hash" placeholder="Contraseña" required><br><br>
							<button type="submit">Iniciar Sesión</button><br>
						</form>
						</div>
					</th>
                </tr>
			</table>    
		</thead>
	</div>			 
		<div class="register">
		<table>
			
        	<th><h2>REGISTRAR NUEVO PACIENTE:</h2></th>
			
            <th><a href="registro_paciente.php" class="boton">REGISTRARSE</a></th>
		</table>
		</div>
		
		<tbody>
		<div class="container">
		<style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1em;
            min-width: 400px;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>			
    <h2>Próximas Citas Médicas</h2>

    <table>
        <thead>
            <tr>
                <th>id_cita</th>
                <th>fecha</th>
                <th>hora</th>
                <th>id_paciente</th>
                <th>id_medico</th>
                <th>motivo</th>
            </tr>
        </thead>
        
            <?php
						
				// Consulta SQL para obtener los datos de la tabla
				$sql = "SELECT * FROM cita";
				$result = $conn->query($sql);

				// Verifica si hay resultados
				if ($result->num_rows > 0) {
					// Salida de datos de cada fila
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row["id_cita"] . "</td>";
						echo "<td>" . $row["fecha"] . "</td>";
						echo "<td>" . $row["hora"] . "</td>";
						echo "<td>" . $row["id_paciente"] . "</td>";
						echo "<td>" . $row["id_medico"] . "</td>";
						echo "<td>" . $row["motivo"] . "</td>";
								// Añade más columnas según sea necesario
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='3'>No se encontraron resultados</td></tr>";
				}
				$conn->close();
				?>
			
			
        </tbody>
    </table>
	
	<div class="register">
		<table>
		   	<th><h2>INGRESAR COMO: </h2></th>
			<th><a href="login_admin.php" class="boton">ADMIN</a></th>
			<th><a href="login_medico.php" class="boton">MEDICO</a></th>
		</table>
		</div>

</body>

	
</html>
