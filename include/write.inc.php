<?php

//Dependencies
include('xmlOpen.inc.php');

function writeXML($xmlfile, $name, $score, $rightA, $falseA, $ip) {

    $xmldbase = simplexml_load_file($xmlfile);
    $datestamp = date(DATEMODE);

    foreach ($xmldbase->player as $key) {
        $id = $key->id;
    }

    $id = (int)$id + 1;

    $player = $xmldbase->addChild('player');

    $player->addChild('id', $id);
    $player->addChild('name', $name);
    $player->addChild('date', $datestamp);
    $player->addChild('score', $score);
    $player->addChild('right', $rightA);
    $player->addChild('false', $falseA);
    $player->addChild('ip', $ip);

    $xmldbase->asXML($xmlfile);

}