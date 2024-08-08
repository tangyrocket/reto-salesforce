<?php

// Obtener la ruta de la solicitud HTTP
$url = $_SERVER['REQUEST_URI'];

$url_parts = parse_url($url);

// eliminamos la parte incial del dominio
$path = str_replace('/backend-nttdata', '', $url_parts['path']);

// Obtenemos la consulta query del endpoitn
$query = $url_parts['query'] ?? ''; // Si no hay consulta asignamos cadena vacía

//Recuperamos la consulta dentro de la ruta
$query_params = array();
parse_str($query, $query_params);

$cantidad = $query_params['cantidad'] ?? null;


// dividimos la ruta por segmentos y lo separamos por /
$routesArray = explode("/", $path);
//filtramos por el array para eliminar valores nulos
$routesArray = array_filter($routesArray);
// obtenemos el méto http, si es get, post, etc
$requestMethod = $_SERVER['REQUEST_METHOD'];

//si la longitud del array es 0 devolverá error
if(count($routesArray) == 0){
    $json = array (
        'status' => 404,
        'result' => 'Not found'
    );

    //devolvemos el estado 404 si la ruta no fue encontrada
   http_response_code(404);

}


//verificamos que la ruta sea correcta y la dirigimos al servicio get
if(count($routesArray) == 1 && isset($path)){

        if($requestMethod == "GET" ){
            include "services/get.php";
        }
 
    }
