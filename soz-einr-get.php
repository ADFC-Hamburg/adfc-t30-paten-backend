<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Content-Type: application/json');

$okay=array(
    'id' => 42,
    'name' => 'Haus am Frankenberg',
    'strasse' => 'Am Frankenberg 34',
    'art' => 3,
    'plz' => '21077',
    'ort' => 'Hamburg',
    'lat' =>  53.43802815,
    'lon' => 9.98145757,
    'zusatz' => '',
    'telefon' => '',
    't50' => '1',
    'keineWeiterenStrassen' => true,
    'angrenzendeStrassen' => array(
        array(
            'id' => 91,
            'name' => 'Beispielstraße',
            'von' => '10',
            'bis' => '20',
            'haupteingang' => '1',
            'status' => '3',
            'spurigkeit' => '1',
            'anmerkung_bus' => '',
            'anemerkung' => 'Veloroute 5',
            'busverkehr' => '1',
        ),
        array(
            'id' => 117,
            'name' => 'Beispielweg',
            'von' => '1a',
            'bis' => '3c',
            'haupteingang' => '0',
            'status' => '3',
            'spurigkeit' => '2',
            'anemerkung' => 'Veloroute 5',
            'anmerkung_bus' => 'Hier ist im Berufsverkehr Dauerstau',
            'buslinien' => '110,112',
            'busverkehr' => '2',
        )
    )
);

echo json_encode($okay);


};
