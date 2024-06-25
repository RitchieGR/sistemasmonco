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
    
	$id_paciente = $_POST['id_paciente'];
	$fecha = $_POST['fecha'];
	$descripcion = $_POST['descripcion'];
	
    // Preparar la consulta SQL
    $sql = "INSERT INTO historia (id_paciente, fecha, descripcion)
    VALUES ('$id_paciente', '$fecha', '$descripcion')";

    if ($conn -> query($sql) === TRUE) {
       
    include("perfil_paciente.php");


    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
		include("crear_historia.php");
    }
}
?>