<?php
    header("Content-Type: application/json");
    
    $source = "";

    // API consumption
    if ( $_GET["request"] == 1 )
    {
        $source = "https://tegrawarivera.somee.com/Inventory?_=" . strval(rand());
    }
    else if( $_GET["request"] == 2 && isset($_GET["prodToSearch"]) && isset($_GET["chkNoStock"]) )
    {
        $source = "https://tegrawarivera.somee.com/Inventory/SearchProducts/".$_GET["prodToSearch"]."/".$_GET["chkNoStock"]; 
    }
    else if ( $_GET["request"] == 3 && $_GET["product"] )
    {
        $source = "https://tegrawarivera.somee.com/Inventory/GetBoxes/".$_GET["product"];
    }

    if ( $source != "" )
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $source);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);    
        curl_setopt($curl, CURLOPT_HEADER, false);

        $curlHandle = curl_init($source);
        curl_setopt($curlHandle,  CURLOPT_RETURNTRANSFER, TRUE);
    
        $response = curl_exec($curlHandle);
        echo $response;
        curl_close($curlHandle);
    }


    exit();

?>