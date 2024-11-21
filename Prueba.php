<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Registro de Asesorías</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .subject-list {
            margin-top: 20px;
        }

        .subject-list a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background-color: #005f4b;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            width: 200px;
        }

        .subject-list a:hover {
            background-color: #007b62;
        }

        .mensaje {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #e0ffe0;
            color: #005f4b;
        }

        .error {
            background-color: #ffe0e0;
            color: #a10000;
        }
    </style>
</head>
<body>
    <h1>Registro de Asesorías</h1>


    <h2>Selecciona una Asesoría:</h2>
    <div class="subject-list">
        <!-- Enlaces dinámicos para insertar asesorías -->
        <a href="prueba.php?tema=POO">POO</a>
        <a href="prueba.php?tema=Estructuras">Estructuras</a>
        <a href="prueba.php?tema=Redes">Redes</a>
    </div>


<?php

$serverName = "PCOLIN3"; 
$connectionOptions = array(
"Database" => "asesoratec", 
"Uid" => "",  
"PWD" => ""   
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}


// ID del usuario desde la sesión
$id_usuario = $_SESSION['id_usuario'];

// Comprobar si se ha hecho clic en algún enlace para insertar
if (isset($_GET['tema'])) {
    $tema = $_GET['tema'];

    // Consulta para insertar la asesoría
    $consulta = "INSERT INTO asesorias (id_alumno, tema, estado, calificacion) VALUES (?, ?, 'Pendiente', 0.0)";
    $params = array($id_usuario, $tema);

    $stmt = sqlsrv_prepare($conn, $consulta, $params);

    if (!$stmt) {
        die("Error al preparar la consulta: " . print_r(sqlsrv_errors(), true));
    }

    // Ejecutar la consulta
    if (sqlsrv_execute($stmt)) {
        $mensaje = "La asesoría '$tema' fue registrada con éxito.";
    } else {
        $mensaje = "Ocurrió un error al registrar la asesoría: " . print_r(sqlsrv_errors(), true);
    }
}
?>

</body>
</html>
