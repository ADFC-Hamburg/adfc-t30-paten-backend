<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");
 $data = json_decode(file_get_contents('php://input'), true);
// print_r($data);
if ($data['pate']['vorname'] == 'Hallo') {
$rtn_data['error']='Der Vorname Hallo darf nicht verwendet werden';
} else {
$rtn_data['ok']=1;
}


header('Content-Type: application/json');
echo json_encode($rtn_data);