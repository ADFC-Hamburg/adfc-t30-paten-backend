<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");

$okay=$_GET['sessionId'];

header('Content-Type: application/json');

echo json_encode($okay);
