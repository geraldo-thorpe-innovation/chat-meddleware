<?php
$end = $_POST['end'];
$url = "https://chat.miauuapi.com/$end";
$ch = curl_init(); // INICIA CONEXÃO
curl_setopt($ch, CURLOPT_URL, $url); // LIGAÇÃO COM O LINK

header('Access-Control-Allow-Origin: https://miauuchat.herokuapp.com');
$hr = array("authorization: giwXuRY4ucOqQvz2g08OhMy89KxxZrv0", 'Access-Control-Allow-Origin: *');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // HABILITA RESPONSE
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // DESABILITAR CERTIFICAÇÃO SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // DESABILITAR CERTIFICAÇÃO SSL
curl_setopt($ch, CURLOPT_HTTPHEADER, $hr); //HEADERS

$response = curl_exec($ch);
curl_close($ch);

echo $response;