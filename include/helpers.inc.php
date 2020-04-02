<?php

function clientIP() {
    if (! isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $client_ip = $_SERVER['REMOTE_ADDR'];
        return $client_ip;
        
    }
        
        else {
        
            $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            return $client_ip;
        
        }
}