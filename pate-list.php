<?php
 header("Access-Control-Allow-Origin: http://localhost:4200");
 header("Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description, x-t30-frontend-version, x-t30-frontend-production");


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Content-Type: application/json');
  $list=array(
          array(
            id => 17,
            einrichtung => array(
              name=> 'Goethe Schule Harburg',
              zusatz => 'Oberstufe',
              strasse=>"Bunatwiete 20",
              plz=>"21073",
              ort=>"Hamburg",
            ),
            mailSend => true,
          ),
          array(
            id => 18,
            einrichtung => array(
              name=> 'Goethe Schule Harburg',
              zusatz => 'Hauptgebäude',
              strasse=> "Eißendorfer Straße 26",
              plz=>"21073",
              ort=>"Hamburg",
            ),
            mailSend => false,
          ),
      );

    echo json_encode($list);
};
