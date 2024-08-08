<?php

$ruta_padre = dirname(dirname(__DIR__));

    switch (true) {
      case ($path === '/obtener-datos'):
       
        include $ruta_padre . "/modules/obtener-datos.php";
        break;
      
      default:
        http_response_code(404);
        echo 'Solicitud no válida';
        break;
    }
