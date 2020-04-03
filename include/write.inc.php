<?php

//Dependencies
include('xmlOpen.inc.php');

function writeXML($xmlfile, $name, $score, $rightA, $falseA, $ip) {

    $xmldbase = simplexml_load_file($xmlfile);

    $id = (integer) $xmldbase['id'];
    $xmldbase['id'] = $id+1;

    $xmlString = "
        <player>
            <id>$id</id>
            <name>$name</name>
            <score>$score</score>
            <right>$rightA</right>
            <false>$falseA</false>
            <ip>$ip</ip>
        </player>";

    $xmldbase = new SimpleXMLElement($xmlString);

    $xmldbase->asXML($xmlfile);

}