<?php
$end = $_POST['end'];
$url = "https://chat.miauuapi.com/$end";
$ch = curl_init(); // INICIA CONEXÃO
curl_setopt($ch, CURLOPT_URL, $url); // LIGAÇÃO COM O LINK

$hr = array("authorization: giwXuRY4ucOqQvz2g08OhMy89KxxZrv0", 'Access-Control-Allow-Origin: *', 'Access-Control-Allow-Headers: X-Requested-With', 'content-type', 'access-control-allow-origin', 'access-control-allow-methods', 'access-control-allow-headers');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // HABILITA RESPONSE
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); // DESABILITAR CERTIFICAÇÃO SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1); // DESABILITAR CERTIFICAÇÃO SSL
curl_setopt($ch, CURLOPT_HTTPHEADER, $hr); //HEADERS

$response = curl_exec($ch);
curl_close($ch);

echo $response;