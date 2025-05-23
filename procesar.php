<?php
$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "db_hachi";

$conn = new mysqli($host, $usuario, $clave, $bd);

if ($conn->connect_error) {
    http_response_code(500);
    echo "Error de conexión";
    exit;
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contacto (nombre, correo, mensaje) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $correo, $mensaje);

if ($stmt->execute()) {
     echo "<script>
        alert('Mensaje enviado con éxito');
        window.location.href = 'index.php';
    </script>";
} else {
    http_response_code(500);
    echo "Error al guardar";
}

$stmt->close();
$conn->close();
?>

