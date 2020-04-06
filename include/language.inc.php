<?php 

function language() {
    
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

    if (isset($lang)) { 
        $l = substr($lang, 0, 2);
        return $l;
    } else {
        return false;
    }


}