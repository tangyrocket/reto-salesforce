<?php
// Verificar si la solicitud es OPTIONS
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    //Se aceptarán solicitudes desde cualquier dirección por temas prácticos
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Incluimos las demás opciones por si se require mas funcionalidad
    header("Access-Control-Allow-Headers: Content-Type, Accept, Origin, X-Requested-With"); // se establece el tipo de datos que se recibiran desde el header
    // Finalizar la ejecución del script
    exit;
}