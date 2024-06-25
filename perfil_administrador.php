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

<!DOCTYPE html>
<html>
<head>
    <title>Perfil Administrador</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
	
	<div class="register">
	<a href="index.php"></a><br>
	<img src="banner1moncco.jpg" alt="Banner" width="946" height="331">
	<h2>BIENVENIDO/A ...</h2><br>
	</div>
	
</head>
<body>
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
	

<h2>LISTADO DE PACIENTES</h2>				
<table>
    <tr>
        <!-- Ajusta los encabezados de la tabla según las columnas de tu tabla en la base de datos -->
        <th>Cédula</th>
        <th>Nombres</th>
		<th>Apellidos</th>
		<th>Fecha Nac</th>
		<th>Dirección</th>
		<th>Teléfono</th>
        <th>E-mail</th>
        <!-- id_paciente	nombre	apellidos	fecha_nacimiento	direccion	telefono	email	 -->
    </tr>
	
	
    <?php
	
	// Consulta SQL para obtener los datos de la tabla
	$sql = "SELECT * FROM Paciente "; 
	$result = $conn->query($sql);
	
    // Verifica si hay resultados
    if ($result->num_rows > 0) {
        // Salida de datos de cada fila
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_paciente"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["apellidos"] . "</td>";
			echo "<td>" . $row["fecha_nacimiento"] . "</td>";
			echo "<td>" . $row["direccion"] . "</td>";
			echo "<td>" . $row["telefono"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
            // Añade más columnas según sea necesario
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No se encontraron resultados</td></tr>";
    }
    //$conn->close();
    ?>
</table>
		<div class="register">
		<table>
		    <th><h2>ADMINISTRAR PACIENTES: MONCCO©</h2></th>
			<th><a href="editar_paciente.php" class="boton">EDITAR PACIENTE</a></th>
            <th><a href="registro_paciente.php" class="boton">INGRESAR NUEVO PACIENTE</a></th>
		</table>
		</div>


<h2>PROXIMAS CITAS</h2>	
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
    //$conn->close();
    ?>
</table>
		<div class="register">
		<table>
			
        	<th><h2>ADMINISTRAR CITAS: MONCCO©</h2></th>
			<th><a href="editar_cita.php" class="boton">EDITAR CITA</a></th>
            <th><a href="agendar_cita.php" class="boton">AGENDAR NUEVA CITA</a></th>
		</table>
		</div>


<h2>LISTADO DE MEDICOS</h2>		
<table>
    <tr>
        <!-- Ajusta los encabezados de la tabla según las columnas de tu tabla en la base de datos -->
        <th>Cédula</th>
        <th>Nombres</th>
		<th>Apellidos</th>
		<th>Especialidad</th>
		<th>Teléfono</th>
        <th>E-mail</th>
        <!-- id_paciente	nombre	apellidos	fecha_nacimiento	direccion	telefono	email	 -->
    </tr>
	
    <?php
	
	// Consulta SQL para obtener los datos de la tabla
	$sql = "SELECT * FROM medico "; 
	$result = $conn->query($sql);
	
    // Verifica si hay resultados
    if ($result->num_rows > 0) {
        // Salida de datos de cada fila
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_medico"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["apellidos"] . "</td>";
			echo "<td>" . $row["especialidad_id"] . "</td>";
			echo "<td>" . $row["telefono"] . "</td>";
			echo "<td>" . $row["email"] . "</td>";
            // Añade más columnas según sea necesario
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No se encontraron resultados</td></tr>";
    }
    //$conn->close();
    ?>
</table>
		<div class="register">
		<table>
		    <th><h2>ADMINISTRAR MEDICOS: MONCCO©</h2></th>
			<th><a href="editar_medico.php" class="boton">EDITAR MEDICO</a></th>
            <th><a href="registro_medico.php" class="boton">INGRESAR NUEVO MEDICO</a></th>
		</table>
		</div>		
<table>
<div class="register">
		<table>
			<th><a href="index.php" class="boton">Inicio</a></th><br>
            <th><a href="login_medico.php" class="boton">Volver</a></th>
		</table>
		</div>
</table>
</div>
</body>
</html>
