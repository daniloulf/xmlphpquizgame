<?php
//Dependencies
include('config.inc.php');
include('xmlOpen.inc.php');
include('helpers.inc.php');

//Session Setup
session_id('game' . random_int(1, 999999));
session_start();
$_SESSION['userip'] = clientIP();

//Vars
$control_val = array();
$answer_val = array();
$score_val = array();
$rightAnswers = 0;
$falseAnswers = 0;

$foo = 0;
$i = 0;
$j = 0;

$xml_database = xmlOpen('.'. XMLQUESTIONSFILE);
$counted = count($xml_database);
$error_msg = false;
$globalScore = 0;

//generate Array control
foreach($xml_database->question as $question) {
    $id = $question->id;
    $resolving = $question->resolving;
    $score = $question->score;

    $control = $id . '-' . $resolving;
    //generated array
    $control_val[$i] = $control;
    $score_val[$i] = $score;

    $i++;
}

//generate Array from user input
foreach($_POST as $name => $value) {
    if($value != SUBMITBUTTONVALUE) {
        //generated array
        $answer_val[$j] = $value;
        $j++;
    } 
}

//compare arrays
while($foo < $counted) {
    if ($answer_val[$foo] != $control_val[$foo]) {
        $falseAnswers++;
    } else {
        $globalScore += $score_val[$foo];
        $rightAnswers++;
    }

    $foo++;
}

if (isset($globalScore)) $_SESSION['score'] = $globalScore;
if (isset($rightAnswers)) $_SESSION['rightAnswers'] = $rightAnswers;
if (isset($falseAnswers)) $_SESSION['falseAnswers'] = $falseAnswers;

header('Location:../evaluation.php');