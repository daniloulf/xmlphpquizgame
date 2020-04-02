<?php
//Dependencies
include('config.inc.php');
include('xmlOpen.inc.php');
include('helpers.inc.php');

//Session Setup
session_start();
$_SESSION['userip'] = clientIP();

//Vars
$control_val = array();
$answer_val = array();
$score_val = array();
$rightAnswers = 0;
$falseAnswers = 0;

$i = 0;
$j = 0;
$foo = 0;

$xml_database = xmlOpen('.'.$xmlDBfile);
$counted = count($xml_database);
$error_msg = false;
$globalScore = 0;

/*
    TODO:
    *****
        > add score to globalScore
        > go to evaluation page
        > show values there

    ERRORS:
    *******
        > operator does not work yet

    HINT:
    *****
        > app stop's on this page
*/

//generate Array control
foreach($xml_database->question as $question) {
    $id = $question->id;
    $resolving = $question->resolving;
    $score = $question->score;

    $control = $id . '-' . $resolving;
    //generated array
    $control_val[$i++] = $control;
    $score_val[$i] = $score;
}

//generate Array from user input
foreach($_POST as $name => $value) {
    if($value != $submitButtonVal) {
        //generated array
        $answer_val[$j++] = $value;
    } 
}

//compare arrays
while($foo < $counted) {
    if ($answer_val[$foo] != $control_val[$foo]) {
        $falseAnswers++;
    } else {
        //$globalScore = $globalScore + $score_val;
        $rightAnswers++;
    }

    $foo++;
    
    //Debug
    echo $foo . '<br />';
    //echo $answer_val[$foo] . '<br />';
    //echo $control_val[$foo] . '<br />';
}

$_SESSION['score'] = $globalScore;
$_SESSION['rightAnswers'] = $rightAnswers;
$_SESSION['falseAnswers'] = $falseAnswers;

echo $_SESSION['score'] . ' Score <br />';
echo $_SESSION['rightAnswers'] . ' Richtige Antworten <br />';
echo $_SESSION['falseAnswers'] . ' Flasche Antworten <br />';

session_destroy();