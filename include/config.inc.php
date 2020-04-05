<?php 
	//global config

	//Pathes
	define('XMLQUESTIONSFILE', './dbase/questions_de.xml');
	define('XMLHIGHSCORESAVE', './dbase/highscores.xml');

	//General
	define('HEADPAGETITLE', 'Quiz System mit PHP und XML');
	define('HEADLINEPAGES', '<a href="./index.php">'. HEADPAGETITLE .'</a>');
	define('FOOTERTEXT', '<p>&copy; <script>document.write(new Date().getFullYear()); </script> bei Danilo Ulf Mattick &mdash; Alle Rechte vorbehalten!</p>');
	define('AUTHOR', 'Danilo Ulf Mattick');
	define('DATEMODE', "d.m.Y");
	define('SITELANGUAGE', 'de');
	define('SITEDISCRIPTION', 'Dieses Quiz bietet kurzweilige Unterhaltung mit einem Allgemeinwissenstest.');
	define('MINSCORE', 15);
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
	define('HEADLINEQUESTIONSLIST', 'Beantworten Sie bitte die Fragen');
	define('TEXTANSWERS', 'Antworten:');

	//Highscore
	define('HEADHIGHSCOREPAGE', 'Die besten Ergebnisse');