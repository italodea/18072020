<?php
    $url_request = "https://api.hgbrasil.com/finance?format=json&key=00bb4207";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'rohit');
    curl_setopt($ch, CURLOPT_URL, $url_request);
    $result = curl_exec($ch);
    curl_close($ch);

    $resultArray = json_decode($result);
    header('Content-Type: application/json');
    header("Access-Control-Allow-Origin: *");
    echo $result;
?>