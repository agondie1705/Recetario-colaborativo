
<?php

// conexion.php - Conexión segura con PDO

// Comprobar que el acceso está permitido
if (!defined('ACCESO_PERMITIDO')) {
    die('Acceso denegado');
}

// Cargar la configuración
require_once __DIR__ . '/config.php';

// Opciones de configuración de PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

try {

    // Crear la conexión con la base de datos
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS, $options);

} catch (PDOException $e) {

    // Mostrar el error técnico durante el desarrollo
    echo '<pre>';
    echo 'Error de conexión: ' . $e->getMessage();
    echo '</pre>';

    error_log('Error de conexión PDO: ' . $e->getMessage());
}

?>


