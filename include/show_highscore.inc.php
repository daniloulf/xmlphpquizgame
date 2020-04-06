<?php

//Dependencies
include('config.inc.php');
include('xmlOpen.inc.php');

function showHighscore() {
    $i = 0;
    $xml_database = xmlOpen(XMLHIGHSCORESAVE);

    foreach($xml_database->player as $key) {
        $playerID = $key->id;
        $playerName = $key->name;
        $date = $key->date;
        $playerScore = $key->score;
        $rightA = $key->right;
        $falseA = $key->false;
        
        if ($playerScore > MAXSCORE && $i < 10) {

            echo '
                <div class="col-lg-4">
                <h3 class="hs_playername">' . $playerName . '</h3>
                <ul class="hs_listing">
                    <li>' . HSDATE . $date . '  </li>
                    <li>' . HSRIGHT . $rightA . ' </li>
                    <li>' . HSFALSE . $falseA . '</li>
                    <li>' . HSSCORE . '<strong>' . $playerScore . '</strong></li>
                </ul>
                </div>
            ';

        }

        $i++;

    }

}