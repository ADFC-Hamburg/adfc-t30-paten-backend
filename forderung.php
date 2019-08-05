<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Content-Type: application/json');

$okay=array(
    'id' => 91,
    'name' => 'Beispielstraße',
    'von' => '10',
    'bis' => '20',
    'haupteingang' => '1',
    'status' => '3',
    'spurigkeit' => '1',
    'anmerkung_bus' => '',
    'anmerkung' => 'Veloroute 5',
    'busverkehr' => '1',
    'einrichtung' => 42
);

echo json_encode($okay);


};
