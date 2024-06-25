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
$id_medico = $_POST['id_medico'];
$contrasena_hash = $_POST['contrasena_hash'];

// Prevenir inyección SQL usando prepared statements
$sentencia = "SELECT * FROM medico WHERE id_medico = '".$id_medico."' and id_medico = '".$contrasena_hash."'";
$stmt = $conn->query($sentencia);

if ($stmt->num_rows > 0) {
    
        header("location:perfil_medico.php");
        
} else {
    echo "Usuario no encontrado.";
	include("login_medico.php");
}

// Cerrar la conexión
$stmt->close();

?>
