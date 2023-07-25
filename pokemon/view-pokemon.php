<?php
session_start();

// Comprobar si el usuario está logueado
if(!isset($_SESSION['username'])){
    // Si no está logueado, redirigir a la página de inicio de sesión
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKEMON SELECCIONADO</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <div class="pokemon-container">
        </div>
        <a href="index.html" class="inicio"><button>Ver todos los pokemones</button></a>
    </main> 

    <script src="js/pokemon1.js" type="module"></script>
    
</body>
</html>