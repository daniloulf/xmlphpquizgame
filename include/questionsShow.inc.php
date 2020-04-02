<?php 
//Dependencies
include('xmlOpen.inc.php');

//show questions
function questions_show($xmlDBfile) {
	$xml_database = xmlOpen($xmlDBfile);
	$counted = count($xml_database);
	
	echo '<div class="row">';

	//generate content from database file
	foreach($xml_database->question as $question) {
		
		$id = $question->id;
		$item = $question->item;
		$response_1 = $question->response_1;
		$response_2 = $question->response_2;
		$response_3 = $question->response_3;
		//$resolving = $question->resolving; auslesen in der Beantwortung der Fragen und ein Konstrukt wie bei fieldset verwenden mal sehen
		$score = $question->score;
		
		echo '<div class="col-lg-4 question-items"><h2 class="item">'. $item . '</h2><p><strong>Punkte: </strong>'.  $score .'</p><h3><strong>Antworten:</strong></h3><fieldset class="fieldset_questions"><span><input type="radio" name="'. $id .'" value="'. $id .'-1" required /><label for="'. $id . '-1">'. $response_1 .'</label></span><br/><span><input type="radio" name="'. $id . '" value="'. $id .'-2" required /><label for="'. $id .'-2">'. $response_2 .'</label></span><br/><span><input type="radio" name="'. $id .'" value="'. $id .'-3" required  /><label for="'. $id. '-3">'. $response_3 .'</label></span><br/></fieldset><hr /></div>';
	}

	//close row
	echo '</div>';

	//count content of database
	echo '<p class="countdb"><strong>Anzahl Datensätze:</strong> '. $counted . ' </p><br /> ';
}