<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");

$okay=array(
    'id' => 42,
    'username' =>'abc',
    'vorname' => 'Willy',
    'nachname' => 'Speichenbruch',
    'email' => 'willy.Speichenbruch@hamburg.adfc.de',
    'strasse' => 'Max-Brauer-Allee 1',
    'plz' => '29999',
    'ort' => 'Hamburg',
    'telefon' => '040-112112',
);

echo json_encode($okay);
