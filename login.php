<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios_web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST['email'];
   $password = $_POST['password'];

   // Consulta para verificar las credenciales
   $sql = "SELECT id, nombre FROM usuarios_web WHERE email = ? AND password = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("ss", $email, $password);
   $stmt->execute();
   $result = $stmp->get_result();

   if ($stmt->num_rows == 1) {
      $_SESSION['id'] = $id;
      $_SESSION['nombre'] = $nombre;
      
      header("Location: intranet.php");
   } else {
      echo "Correo o contraseña incorrectos";
   }

   $stmt->close();
}
$conn->close();
?>
