<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Content-Type: application/json');

$okay=array(
    'id' => 42,
    'name' => 'Haus am Frankenberg',
    'strasse' => 'Am Frankenberg 34',
    'plz' => '21077',
    'ort' => 'Hamburg',
    'lat' =>  53.43802815,
    'lon' => 9.98145757,
);

echo json_encode($okay);


};
