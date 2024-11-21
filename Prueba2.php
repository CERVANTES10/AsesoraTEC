<?php
// Iniciar la sesión
session_start();

// Verificar si la sesión está activa y el usuario tiene un ID válido
if (isset($_SESSION['id_usuario']) && isset($_GET['subject']) && isset($_GET['Enlace'])) {
    $userId = $_SESSION['id_usuario'];  // ID del usuario desde la sesión
    $subject = $_GET['subject'];  // Texto del enlace (materia)
    $Enlace = $_GET['Enlace'];  // Enlace a redirigir
    
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

    // Consulta SQL para insertar el registro en la tabla "asesorias"
    $sql = "INSERT INTO asesorias (id_alumno, tema, estado, calificacion) VALUES (?, ?, 'Pendiente', '0.0')";
    
    // Preparar la consulta
    $stmt = sqlsrv_prepare($conn, $sql, array($userId, $subject));
    
    // Ejecutar la consulta
    if (sqlsrv_execute($stmt)) {
        // Redirigir al enlace recibido como parámetro
        header("Location: " . $Enlace);
        //echo "Usuario: " . $userId;
        //echo "Tema: " . $subject;
        //echo "Enlace: " . $Enlace;
        exit(); // Asegura que no se ejecute ningún código posterior
    } else {
        echo "Error al registrar la asesoría: " . sqlsrv_errors();
    }

    // Cerrar la conexión
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
} else {
    echo "No se pudo registrar la asesoría. Usuario no autenticado o enlace no válido.";
}
?>
