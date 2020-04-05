<?php

//Dependencies
include('config.inc.php');
include('xmlOpen.inc.php');

function showHighscore() {

    $xml_database = xmlOpen(XMLHIGHSCORESAVE);

    foreach($xml_database->player as $key) {
        $playerID = $key->id;
        $playerName = $key->name;
        $date = $key->date;
        $playerScore = $key->score;
        $rightA = $key->right;
        $falseA = $key->false;
        
        echo '
            <div class="col-lg-4">
            <h3>' . $playerName . '</h3>
            <ul>
                <li>Gespielt am/um: ' . $date . '  </li>
                <li>richtige Antworten: ' . $rightA . ' </li>
                <li>falsche Antworten: ' . $falseA . '</li>
                <li>Punktzahl: <strong>' . $playerScore . '</strong></li>
            </ul>
            </div>
        ';

    }

}