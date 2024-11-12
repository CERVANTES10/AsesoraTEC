<?php
$serverName = "Colin3"; 
$connectionOptions = array(
    "Database" => "AsesoraTEC", 
    "Uid" => "",  
    "PWD" => ""   
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Obtener datos del formulario
$correo = trim($_POST['correo']);
$contrasena = trim($_POST['contrasena']);

$sql = "SELECT id_usuario, Nombre, contrasena FROM Usuarios WHERE correo = ?";
$params = array($correo);

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Verificar si el usuario existe
if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    // Comparar la contraseña ingresada con la almacenada
    if ($contrasena === $row['contrasena']) {
        // Contraseña correcta, inicia sesión
        session_start();
        $_SESSION['id_usuario'] = $row['id_usuario'];
        $_SESSION['Nombre'] = $row['Nombre'];
        
        // Redirigir a la página de inicio o dashboard
        header("Location: index.html");
        exit();
    } else {
        // Contraseña incorrecta
        header("Location: InicioSesion.html?error=contraseña_incorrecta");
        exit();
    }
} else {
    // Usuario no encontrado
    header("Location: InicioSesion.html?error=Correo_invalido");
    exit();
}

// Cerrar la conexión
sqlsrv_close($conn);
?>
