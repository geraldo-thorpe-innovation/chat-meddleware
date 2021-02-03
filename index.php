<?php
$ch = curl_init(); // INICIA CONEXÃO
curl_setopt($ch, CURLOPT_URL, "https://chat.miauuapi.com/rooms"); // LIGAÇÃO COM O LINK

$hr = array("authorization: giwXuRY4ucOqQvz2g08OhMy89KxxZrv0");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // HABILITA RESPONSE
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // DESABILITAR CERTIFICAÇÃO SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // DESABILITAR CERTIFICAÇÃO SSL
curl_setopt($ch, CURLOPT_HTTPHEADER, $hr); //HEADERS

$response = curl_exec($ch);
curl_close($ch);

echo $response;
// print_r($response);