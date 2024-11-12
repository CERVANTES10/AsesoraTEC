<?php
$serverName = "Cervantes\SQLEXPRESS"; 
$connectionOptions = array(
    "Database" => "AsesoraTEC",
    "Uid" => "",  
    "PWD" => ""   
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die("Error de conexión: " . print_r(sqlsrv_errors(), true));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $rol = trim($_POST['rol']);
    $contrasena = trim($_POST['contrasena']);

    if (empty($nombre) || empty($correo) || empty($contrasena) || empty($rol)) {
        echo "Por favor completa todos los campos.";
        exit();
    }

    // Verificar si el correo ya existe en la base de datos
    $checkEmailSql = "SELECT 1 FROM [Usuarios] WHERE [correo] = ?";
    $checkEmailParams = array($correo);
    $checkEmailStmt = sqlsrv_query($conn, $checkEmailSql, $checkEmailParams);

    if ($checkEmailStmt === false) {
        echo "Error en la consulta de verificación: <br>";
        foreach (sqlsrv_errors() as $error) {
            echo "SQLSTATE: " . $error['SQLSTATE'] . "<br>";
            echo "Code: " . $error['code'] . "<br>";
            echo "Message: " . $error['message'] . "<br>";
        }
        exit();
    }

    if (sqlsrv_fetch_array($checkEmailStmt)) {
        // Redirigir a registro.html con un parámetro de error si el correo ya está registrado
        header("Location: Registro.html?error=correo_existente");
        exit();
    }

    // Si el correo no existe, inserta el nuevo usuario
    $sql = "INSERT INTO [Usuarios] ([Nombre], [correo], [contrasena], [rol]) VALUES (?, ?, ?, ?)";
    $params = array($nombre, $correo, $contrasena, $rol);

    $stmt = sqlsrv_query($conn, $sql, $params);
    if ($stmt === false) {
        echo "Error en la consulta de inserción: <br>";
        foreach (sqlsrv_errors() as $error) {
            echo "SQLSTATE: " . $error['SQLSTATE'] . "<br>";
            echo "Code: " . $error['code'] . "<br>";
            echo "Message: " . $error['message'] . "<br>";
        }
    } else {
        // Redirigir a la página de inicio de sesión si el registro fue exitoso
        header("Location: InicioSesion.html");
        exit();
    }
}

sqlsrv_close($conn);
?>
