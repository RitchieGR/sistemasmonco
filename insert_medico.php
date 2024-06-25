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
    $cedulaMedico = $_POST['cedulaMedico'];
	$nombreMedico = $_POST['nombreMedico'];
    $apellidoMedico = $_POST['apellidoMedico'];
    //$especialidad = $_POST['especialidad'];
	$telefonoMedico = $_POST['telefonoMedico'];
    $emailMedico = $_POST['emailMedico'];
	
    // Preparar la consulta SQL
    $sql = "INSERT INTO medico (id_medico, nombre, apellidos, telefono, email)
    VALUES ('$cedulaMedico', '$nombreMedico', '$apellidoMedico', '$telefonoMedico', '$emailMedico')";

    if ($conn -> query($sql) === TRUE) {
       header("location:perfil_administrador.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
		include("registro_medico.php");
    }
}
?>