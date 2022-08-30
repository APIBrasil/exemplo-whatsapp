<?php

$curl = curl_init();

$texto = isset($_GET['texto']) ? $_GET['texto'] : '';
$numero = isset($_GET['numero']) ? $_GET['numero'] : '';

curl_setopt_array($curl, [
    CURLOPT_URL => 'https://whatsapp-free01.wppserver.com/api/Pocket%20100/send-message',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
		"phone": "'.$numero.'",
		"message": "'.$texto.'",
		"isGroup": false
	}',
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'Authorization: Bearer $2b$10$fm45gvxDaOuYXtMlye1DJOQGz7ltEth9IcIHmzZmbcpagZFW_XOCS',
    ],
]);

$response = curl_exec($curl);

curl_close($curl);
var_dump($response);
die();
