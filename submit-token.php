<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");
$token = $_GET['token'];

if ($token != 'OKAY') {
    $rtn_data['error']='Der eingebene Token ist ungültig, weil er bereits benutzt wurde oder er falsch eingeben wurde. Nur der Token OKAY ist gültig';
} else {
    $rtn_data['ok']=1;
}


header('Content-Type: application/json');
echo json_encode($rtn_data);