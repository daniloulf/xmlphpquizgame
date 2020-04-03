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
        $globalScore = $globalScore + $score_val[$foo];
        $rightAnswers++;
    }

    $foo++;
}

if (isset($globalScore)) $_SESSION['score'] = $globalScore;
if (isset($rightAnswers)) $_SESSION['rightAnswers'] = $rightAnswers;
if (isset($falseAnswers)) $_SESSION['falseAnswers'] = $falseAnswers;

header('Location:../evaluation.php');