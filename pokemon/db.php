<?php
$server = 'localhost';
$user = 'upokemon';
$pass = 'D@o?qb)%QD5S';
$db = 'pokemon';

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
} else 
{ echo "Se conecto";
}
?>
