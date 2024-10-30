<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información necesaria</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .info-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .info-box {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
        }
        .info-box h2 {
            color: #333;
            text-align: center;
            margin-bottom: 1rem;
        }
        .logout-btn {
            background: #dc3545;
            border: none;
            padding: 0.75rem;
            border-radius: 5px;
            color: white;
            display: block;
            margin: 0 auto;
            text-align: center;
            transition: background 0.3s ease;
        }
        .logout-btn:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <div class="info-container">
        <div class="info-box">
            <h2>Bienvenido, Usuario de Almendra Bananas</h2>
            <p>Esta es la página de información para los usuarios que han iniciado sesión.</p>
            <a href="logout.php" class="logout-btn">Cerrar Sesión</a>
        </div>
    </div>
</body>
</html>
