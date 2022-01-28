<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.mista.io/sms',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('to' => "$phone",'from' => 'SsavaFarms','unicode' => '0','sms' => "$msg",'action' => 'send-sms'),
    CURLOPT_HTTPHEADER => array(
        'x-api-key: a2sya21rZ2R1OHJoeXMza3JjdXVpNXRqYzdoOHJnMDk='
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;