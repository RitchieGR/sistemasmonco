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
    $id_cita = $_POST['id_cita'];
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$motivo = $_POST['motivo'];
	
    // Preparar la consulta SQL
    $sql = "INSERT INTO cita (id_cita, fecha, hora, motivo)
    VALUES ('$id_cita', '$fecha', '$hora', '$motivo')";

    if ($conn -> query($sql) === TRUE) {
       
    include("perfil_paciente.php");


    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
		include("agendar_cita.php");
    }
}
?>