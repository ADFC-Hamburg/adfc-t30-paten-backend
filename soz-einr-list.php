<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Content-Type: application/json');
  $json=file_get_contents ( 'sozEinr.json');
  echo $json;
};
