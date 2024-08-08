<?php

/*realizaremos la consulta 10 veces según los solicitadp */
// $cantidad lo obtenemos desde el momento de la consulta

$url = 'https://randomuser.me/api/';
$users = [];

for ($i = 0; $i < 
$cantidad; $i++) {
    $response = file_get_contents($url);

    if ($response !== false) {
        $userData = json_decode($response, true);
        $users[] = $userData['results'][0];
    } else {
        echo json_encode(['error' => 'Error al realizar la solicitud.']);
        exit;
    }
}

header('Content-Type: application/json');
echo json_encode(['results' => $users]);
?>
