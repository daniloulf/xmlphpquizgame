<?php 
	//Dependencies
	include('language.inc.php');
	$lang = language();

	//global config
	define('MINSCORE', 15);
	define('MAXSCORE', 40);

	//Pathes
	define('XMLHIGHSCORESAVE', './dbase/highscores.xml');

	if ($lang == 'de') {

		//GERMAN

		//Pathes lang sens
		define('XMLQUESTIONSFILE', './dbase/questions_de.xml');

		//General
		define('HEADPAGETITLE', 'Quiz System mit PHP und XML');
		define('HEADLINEPAGES', '<a href="./index.php">'. HEADPAGETITLE .'</a>');
		define('FOOTERTEXT', '<p>&copy; <script>document.write(new Date().getFullYear()); </script> bei Danilo Ulf Mattick &mdash; Alle Rechte vorbehalten!</p>');
		define('AUTHOR', 'Danilo Ulf Mattick');
		define('DATEMODE', "d.m.Y");
		define('SITELANGUAGE', 'de');
		define('SITEDISCRIPTION', 'Dieses Quiz bietet kurzweilige Unterhaltung mit einem Allgemeinwissenstest.');
		define('WEBMASTER', '<a href="mailto:webmaster@dum-planet.de?subject=Quizprobleme">Webmaster</a>' );
		define('YOUALLREADYPLAYED', '<p>Sie haben bereits gespielt und ein Ergebnis hinterlassen, versuchen Sie es später nochmal.</p>');

		//Evaluation
		//msg
		define('HIGHSCORELINK', '<p><a href="highscore.php">Highscoreliste anzeigen</a></p>');
		define('SESSIONOVER', '<p>Session ist abgelaufen.</p>');
		define('SESSIONOVERMORE', '<p>Die Session ist abgelaufen und die Daten wurden gelöscht. Sollten Ihre Eingaben nicht gespeichert worden sein, wenden Sie sich bitte mit einem Screenshot der Ihren Erfolg dokumentiert an den <strong>'. WEBMASTER . '.</strong></p>');
		define('MSGSUCCESS', '<p class="fileupdate-msg">Ihr Ergebnis wurden gespeichert! Vielen Dank fürs Spielen.</p>');
		define('ERRORNONAME', 'Bitte geben Sie einen Namen oder Nickname ein.');
		define('THANKYOUFORPLAYING', '<p><strong> Danke für das Spielen, ');
		define('TOLESSSCORE', '<p>Leider ist Ihre Punktzahl zu gering, versuchen Sie es später nochmal.</p>');
		
		//headlines
		define('HEADEVALUATION', 'Ihr Ergebnis');
		define('HEADTEXTSCORE', 'Punktzahl');
		define('HEADRIGHTANS', 'Richtige Antworten');
		define('HEADFALSEANS', 'Falsche Antworten');
		define('SCORETEXT', 'Punkte');
		define('FALSEANSWERSTEXT', 'falsche Antworten');
		define('RIGHTANSWERSTEXT', 'richtige Antworten');

		//forms
		define('LABELNAMETEXT', 'Ihr Name');
		define('SUBMITNAMEANDDATA', 'Ihre Daten absenden!');

		//Index
		define('SUBMITBUTTONVALUE', 'Antworten prüfen');
		define('SUBMITBUTTON', '<input class="form_button" type="submit" id="submit" name="submit" value="' . SUBMITBUTTONVALUE . '">');
		define('HEADLINEQUESTIONSLIST', 'Beantworten Sie bitte die Fragen');
		define('TEXTANSWERS', 'Antworten:');

		//Highscore
		define('HEADHIGHSCOREPAGE', 'Die besten Ergebnisse');
		define('HSDATE', 'Gespielt am: ');
		define('HSRIGHT', 'richtige Antworten: ');
		define('HSFALSE', 'falsche Antworten: ');
		define('HSSCORE', 'Punktzahl: ');

} else {

		//ENGLISH

		//Pathes lang sens
		define('XMLQUESTIONSFILE', './dbase/questions_en.xml');

		//General
		define('HEADPAGETITLE', 'Quiz System with PHP and XML');
		define('HEADLINEPAGES', '<a href="./index.php">'. HEADPAGETITLE .'</a>');
		define('FOOTERTEXT', '<p>&copy; <script>document.write(new Date().getFullYear()); </script> by Danilo Ulf Mattick &mdash; All rights reserved!</p>');
		define('AUTHOR', 'Danilo Ulf Mattick');
		define('DATEMODE', "m.d.Y");
		define('SITELANGUAGE', 'en');
		define('SITEDISCRIPTION', 'This quiz provides entertainment with a general knowledge test.');
		define('WEBMASTER', '<a href="mailto:webmaster@dum-planet.de?subject=Quiz Trouble">Webmaster</a>' );
		define('YOUALLREADYPLAYED', '<p>You have already played and left a result, please try later again.</p>');

		//Evaluation
		//msg
		define('HIGHSCORELINK', '<p><a href="highscore.php">Show Highscore List</a></p>');
		define('SESSIONOVER', '<p>Session has expired.</p>');
		define('SESSIONOVERMORE', '<p>The session has expired and the data has been deleted. If your entries have not been saved, please contact the with a screenshot that documents your success <strong>'. WEBMASTER . '.</strong></p>');
		define('MSGSUCCESS', '<p class="fileupdate-msg">Your result has been saved! Thanks for playing.</p>');
		define('ERRORNONAME', 'Please enter a name or nickname.');
		define('THANKYOUFORPLAYING', '<p><strong>Thanks for playing, ');
		define('TOLESSSCORE', '<p>Unfortunately your score is too low, please try again later.</p>');
		
		//headlines
		define('HEADEVALUATION', 'Your result');
		define('HEADTEXTSCORE', 'Your score');
		define('HEADRIGHTANS', 'Right answers');
		define('HEADFALSEANS', 'False answers');
		define('SCORETEXT', 'Score');
		define('FALSEANSWERSTEXT', 'false answers');
		define('RIGHTANSWERSTEXT', 'right answers');

		//forms
		define('LABELNAMETEXT', 'Your name');
		define('SUBMITNAMEANDDATA', 'Submit your result!');

		//Index
		define('SUBMITBUTTONVALUE', 'Check answers');
		define('SUBMITBUTTON', '<input class="form_button" type="submit" id="submit" name="submit" value="' . SUBMITBUTTONVALUE . '">');
		define('HEADLINEQUESTIONSLIST', 'Please answer the questions');
		define('TEXTANSWERS', 'Answers: ');

		//Highscore
		define('HEADHIGHSCOREPAGE', 'Best results');
		define('HSDATE', 'played on: ');
		define('HSRIGHT', 'right answers: ');
		define('HSFALSE', 'false answers: ');
		define('HSSCORE', 'score: ');

}