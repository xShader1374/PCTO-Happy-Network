<?php
function getDataWithCurl($endpoint) {
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
}
    
function getDataItemsArrayWithCurl($endpoint){
    $data = getDataWithCurl($endpoint);

    return $data["items"];
}

function getSingleDataArrayWithCurl($endpoint){
    $data = getDataWithCurl($endpoint);

    return $data;
}
?>