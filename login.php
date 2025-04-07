<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "lab_db";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT password FROM users WHERE username = '$user' AND password = '$pass'";

$result = $conn->query($query);
if (!$result) {
    die("Error en la consulta SQL: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo htmlentities($row['password']) . "<br>";
    }
    echo "PR!M€R@_FlÆG/%0";
} else {
    echo "Usuario o contraseña incorrectos.";
}

$conn->close();
?>
