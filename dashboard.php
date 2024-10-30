<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['id'])) {
   header("Location: login.html");
   exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard Usuario</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-6">
            <h2>Bienvenido, <?php echo $_SESSION['nombre']; ?></h2>
            <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
         </div>
      </div>
   </div>
</body>
</html>
