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

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $cedulaPaciente = $_POST['cedulaPaciente'];
	$nombrePaciente = $_POST['nombrePaciente'];
    $apellidoPaciente = $_POST['apellidoPaciente'];
    $fechanacPaciente = $_POST['fechanacPaciente'];
	$direccionPaciente = $_POST['direccionPaciente'];
    $telefonoPaciente = $_POST['telefonoPaciente'];
    $emailPaciente = $_POST['emailPaciente'];
	
    // Preparar la consulta SQL
    $sql = "INSERT INTO paciente (id_paciente, nombre,	apellidos, fecha_nacimiento, direccion, telefono, email)
    VALUES ('$cedulaPaciente', '$nombrePaciente', '$apellidoPaciente', '$fechanacPaciente', '$direccionPaciente', '$telefonoPaciente', '$emailPaciente')";

    if ($conn -> query($sql) === TRUE) {
       header("location:perfil_paciente.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
		include("index.php");
    }
}
?>
