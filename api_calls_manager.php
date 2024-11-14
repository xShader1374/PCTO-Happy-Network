<?php
function getDataWithCurl($endpoint) {
    $base_url = "http://127.0.0.1:90/api/";
    $url = $base_url . $endpoint;
    
    // Inizializza cURL
    $ch = curl_init();
    
    // Imposta le opzioni della richiesta
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Utile se hai problemi con SSL
    
    // Esegui la richiesta
    $response = curl_exec($ch);
    
    // Verifica errori
    if(curl_errno($ch)) {
        echo 'Errore cURL: ' . curl_error($ch);
        return false;
    }
    
    // Chiudi la sessione cURL
    curl_close($ch);
    
    // Decodifica il JSON se la risposta è in formato JSON
    $data = json_decode($response, true);
    
    return $data;
}

/*function getDataWithCurl($endpoint) {
    $base_url = "http://127.0.0.1:90/api/";
    $url = $base_url . $endpoint;
    
    // Configura il contesto della richiesta
    $opts = [
        'http' => [
            'method' => 'GET',
            'header' => [
                'User-Agent: PHP',
                'Accept: application/json'
            ]
        ]
    ];
    
    $context = stream_context_create($opts);
    
    try {
        $response = file_get_contents($url, false, $context);
        
        if ($response === false) {
            return "Errore durante la richiesta\n";
        }
        
        // Decodifica il JSON
        $data = json_decode($response, true);
        
        // Restituisce i risultati
        return $data;
        
    } catch (Exception $e) {
        return $e->getMessage();
    }
}*/
    
function getDataItemsArrayWithCurl($endpoint){
    $data = getDataWithCurl($endpoint);

    return $data["items"];
}

function getSingleDataArrayWithCurl($endpoint){
    $data = getDataWithCurl($endpoint);

    return $data;
}
?>