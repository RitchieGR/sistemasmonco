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
    
	$username = $_POST['username'];
	$password = $_POST['password'];
	
    // Preparar la consulta SQL
    $sql = "INSERT INTO admin_users (username, password)
    VALUES ('$username', '$password')";

    if ($conn -> query($sql) === TRUE) {
    
       include("perfil_administrador.php");
	   
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
		include("insert_admin.php");
    }
}
?>