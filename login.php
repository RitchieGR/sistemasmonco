<?php
// Configuración de la base de datos
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

// Obtener datos del formulario
$cedulaPaciente = $_POST['cedulaPaciente'];
$contrasena_hash = $_POST['contrasena_hash'];

// Prevenir inyección SQL usando prepared statements
$sentencia = "SELECT * FROM paciente WHERE id_paciente = '".$cedulaPaciente."' and id_paciente = '".$contrasena_hash."'";
$stmt = $conn->query($sentencia);

if ($stmt->num_rows > 0) {
    
        header("location:perfil_paciente.php");
        
} else {
    echo "Usuario no encontrado.";
	include("index.php");
}

// Cerrar la conexión
$stmt->close();

?>
