<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $okay=array(
        'error' => 'E-Mail und/oder Passwort falsch.'
    );
    header('Content-Type: application/json');
    sleep(2);
    $okay=true;
    echo json_encode($okay);
}
