<?php

//Dependencies
include('helpers.inc.php');

function testip() {

    $clientIP = clientIP();

    $xml_database = xmlOpen(XMLHIGHSCORESAVE);

    foreach($xml_database->player as $key) {
        $ip = $key->ip;
        
        if ($clientIP == $ip)  return false; 

    }

    return true;
}