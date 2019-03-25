<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $okay=array(
        'error' => 'E-Mail und/oder Passwort falsch.'
    );
    header('Content-Type: application/json');

    if (($data['username']=='abc') && ($data['password']=='abc')) {
        $okay=array(
          id => 42,
          sessionId => 'HAST_NICHT_GESHEN_42_XXX',
          username =>'abc',
          firstName => 'Willy',
          lastName => 'Speichenbruch',
          eMail => 'willy.Speichenbruch@hamburg.adfc.de',
        );
    } else {
	sleep(2);
        header('HTTP/1.1 401 Unauthorized');
    }


    echo json_encode($okay);
}
