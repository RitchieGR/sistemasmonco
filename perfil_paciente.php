<?php
// Datos de la base de datos
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
<!--WHERE id_paciente = '$id_paciente'-->


<!DOCTYPE html>
<html>
<head>
    <title>Perfil Paciente</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
	
	<div class="register">
	<a href="index.php"></a><br>
	<img src="banner1moncco.jpg" alt="Banner" width="946" height="331">
	<h2>BIENVENIDO/A ...</h2><br>
	</div>
	
</head>
<body>
<div class="container">
<h2>PROXIMAS CITAS</h2>
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
	
	
	
<table>
    <tr>
        <!-- Ajusta los encabezados de la tabla según las columnas de tu tabla en la base de datos -->
				<th>N° Cita</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Paciente</th>
                <th>Medico</th>
                <th>Motivo</th>
        <!-- Añade más encabezados según sea necesario -->
    </tr>
    <?php
		
	// Consulta SQL para obtener los datos de la tabla
	$sql = "SELECT * FROM cita "; 
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
</table>

</div>

		<div class="register">
		<table>
			
        	<th><h2>SISTEMA DE CITAS MONCCO©</h2></th>
			<th><a href="crear_historia.php" class="boton">CREAR HISTORIA CLINICA</a></th>
            <th><a href="agendar_cita.php" class="boton">AGENDAR NUEVA CITA</a></th>
		</table>
		</div>

<table>
<div class="register">
		<table>
			<th><a href="index.php" class="boton">Inicio</a></th><br>
            <th><a href="resgistro_paciente.php" class="boton">Volver</a></th>
		</table>
		</div>
</table>
</body>
</html>
