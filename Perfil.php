<?php
session_start(); // Iniciar la sesión
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Alumno</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
 
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
 
        header {
            background-color: #005f4b;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
            position: fixed;
            top: 0;
        }
 
        header h1 {
            font-size: 2em;
        }
 
        .profile-container {
            background-color: white;
            width: 500px;
            padding: 30px;
            margin-top: 80px; /* To avoid overlap with header */
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
 
        .profile-container h2 {
            color: #005f4b;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
 
        .profile-info {
            margin: 15px 0;
            text-align: left;
        }
 
        .profile-info p {
            margin: 5px 0;
        }
 
        .subject-list {
            margin: 20px 0;
            text-align: left;
        }
 
        .subject-list h3 {
            color: #005f4b;
            margin-bottom: 10px;
            font-size: 1.5em;
        }
 
        .subject {
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
            background-color: #e0f7f1;
            transition: background-color 0.3s;
        }
 
        .subject a {
            text-decoration: none;
            color: #005f4b;
            font-weight: bold;
        }
 
        .subject:hover {
            background-color: #b2ebf2;
        }
 
        footer {
            background-color: #005f4b;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
 
 
        button {
            background-color: #005f4b;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>
<body>

<header>
<h1>Perfil del <?php echo $_SESSION['Rol']; ?></h1>
</header>

<div class="profile-container">
    <div class="profile-info">
        <button type="button" onclick="goBack()">
            <i class="fas fa-home"></i> <Strong>Regresar</Strong>
        </button>
        <script>
            function goBack() {
                window.location.href = 'index.php'; 
            }
        </script>

        <p><strong>Nombre: </strong><?php echo $_SESSION['Nombre']; ?></p>
        <p><strong>Número de Control: </strong><?php echo $_SESSION['id_usuario']; ?></p>
        <p><strong>Correo: </strong><?php echo $_SESSION['Correo']; ?></p>
    </div>

    <div class="subject-list">
        
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
$id_asesor = $_SESSION['id_usuario'];

// Consultas para las asesorías pendientes y completadas
$consultaPendientes = "SELECT tema, calificacion FROM asesorias a JOIN usuarios u ON u.id_usuario = a.id_alumno WHERE id_alumno = ? AND estado = 'Pendiente'";
$consultaCompletadas = "SELECT tema, calificacion FROM asesorias a JOIN usuarios u ON u.id_usuario = a.id_alumno WHERE id_alumno = ? AND estado = 'Completado'";

// Array de consultas y títulos
$consultas = [
    ["titulo" => "Asesorías Pendientes", "consulta" => $consultaPendientes],
    ["titulo" => "Asesorías Completadas", "consulta" => $consultaCompletadas],
];

// Iterar sobre las consultas
foreach ($consultas as $consultaData) {
    $stmt = sqlsrv_prepare($conn, $consultaData["consulta"], array($id_asesor));
    
    if (!$stmt) {
        die(print_r(sqlsrv_errors(), true)); // Manejo de errores
    }
    
    // Ejecutar la consulta
    echo '<h3>' . htmlspecialchars($consultaData["titulo"]) . '</h3>';
    if (sqlsrv_execute($stmt)) {
        $found = false; // Indicador para saber si hay resultados
        echo '<div class="subject-list">';
        
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $found = true;
            // Extraer tema y calificación
            $tema = htmlspecialchars($row['tema']);
            $calificacion = is_null($row['calificacion']) ? 'Sin calificación' :  round($row['calificacion'], 1);
            
            // Mostrar tema y calificación
            echo '<div class="subject"><a href="#">' . $tema . '</a><strong> - </strong>' . $calificacion . '</div>';
        }
        
        if (!$found) {
            echo '<p>No tienes ' . strtolower($consultaData["titulo"]) . '.</p>';
        }
        
        echo '</div>';
    } else {
        die(print_r(sqlsrv_errors(), true)); // Manejo de errores
    }
}

?>


    </div>
</div>

<footer>
    <p>Tecnológico Nacional de México - Alumnos de Ingeniería en Sistemas Computacionales</p>
</footer>

</body>
</html>
