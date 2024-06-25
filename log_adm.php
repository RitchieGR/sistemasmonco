<?php
// Configuración de la base de datos
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sistema_moncco";

// Crear conexión
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Prevenir inyección SQL usando prepared statements
$sentencia = "SELECT * FROM admin_users WHERE username = '".$username."' and password = '".$password."'";
$stmt = $conn->query($sentencia);

if ($stmt->num_rows > 0) {
    
        header("location:perfil_administrador.php");
        
} else {
    echo "Usuario no encontrado.";
	include("login_admin.php");
}

// Cerrar la conexión
$stmt->close();

?>
