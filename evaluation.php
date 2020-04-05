<?php 
    session_start();

    //Dependencies
    include('./include/config.inc.php');
    include('./include/write.inc.php');
?>
<!DOCTYPE html>
<html lang="de">
    
    <head>
    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content=""> 
        <meta name="author" content="<?php echo AUTHOR; ?>">

        <title><?php echo HEADPAGETITLE; ?></title>

        <link href="./css/bootstrap.min.css" rel="stylesheet" />
        <link href="./css/bootstrap-theme.min.css" rel="stylesheet" />
        <link href="./css/style.css" rel="stylesheet" media="screen" />
        
    </head>

    <body>
        <header>
			<div class="container">
				<h1>
                    <?php echo HEADLINEPAGES; ?>
				</h1>
			</div>
        </header>
        
        <div class="content container">
        
            <h2><?php echo HEADEVALUATION; ?></h2>

            <div class="row">
                <div class="col-lg-4">
                    <h2><?php echo HEADTEXTSCORE; ?></h2>
                    <?php 
                    
                        if (isset($_SESSION['score'])) {
                            echo '<p>' . $_SESSION['score'] . ' ' . SCORETEXT . '</p><br />';
                        } else { 
                            echo SESSIONOVER; 
                        } 
                    
                    ?>
                </div>
                <div class="col-lg-4">
                    <h2><?php echo HEADRIGHTANS; ?></h2>
                    <?php 
                    if (isset($_SESSION['rightAnswers'])) {
                        echo '<p>' . $_SESSION['rightAnswers'] . ' '. RIGHTANSWERSTEXT.'</p><br />';
                    } else {
                        echo SESSIONOVER; 
                    }
                    
                    ?>
                </div>
                <div class="col-lg-4">
                    <h2><?php echo HEADFALSEANS; ?></h2>
                    <?php
                    if (isset($_SESSION['falseAnswers'])) {
                        echo '<p>' . $_SESSION['falseAnswers'] . ' ' . FALSEANSWERSTEXT . '</p><br />'; 
                    } else {
                        echo SESSIONOVER; 
                    }
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <label for="name"><?php echo LABELNAMETEXT; ?></label><input id="name" type="text" minlength="3" maxlength="8" require name="name" /><br />
                        <input type="submit" name="submit" value="<?php echo SUBMITNAMEANDDATA; ?>" />
                    </form>
                </div>

                <div class="col-lg-6">
                    <?php 
                        
                        if (
                            isset($_POST['submit']) && 
                            isset($_POST['name']) && 
                            isset($_SESSION['score']) && 
                            isset($_SESSION['rightAnswers']) && 
                            isset($_SESSION['falseAnswers']) &&
                            isset($_SESSION['userip'])
                            ) {

                                if (isset($_POST['name'])) {
                                        echo '<p><strong> Tank you ' . $_POST['name'] . '!</strong></p>';

                                        writeXML(XMLHIGHSCORESAVE, $_POST['name'], $_SESSION['score'], $_SESSION['rightAnswers'], $_SESSION['falseAnswers'], $_SESSION['userip']);

                                        echo MSGSUCCESS;
                                        echo HIGHSCORELINK;

                                        $_SESSION = array();
                                        session_destroy();
                                    } else {

                                        echo ERRORNONAME;

                                    }

                        } elseif (
                            !isset($_POST['submit']) && 
                            !isset($_POST['name']) && 
                            !isset($_SESSION['score']) && 
                            !isset($_SESSION['rightAnswers']) && 
                            !isset($_SESSION['falseAnswers']) &&
                            !isset($_SESSION['userip'])
                        ) {

                            echo "<p>Die Session ist abgelaufen und die Daten wurden gelöscht. Sollten Ihre Eingaben nicht gespeichert worden sein, wenden Sie sich bitte mit einem Screenshot der Ihren Erfolg dokumentiert an den <strong>webmaster.</strong></p>"; 
                            echo HIGHSCORELINK;
                        }
                    ?>
                </div>
            </div>

        </div>
        
        <footer>
        
            <div class="container">
            
                <div class="row">
                    <div class="col-lg-12">

                        <?php echo FOOTERTEXT; ?>

                    </div>
                </div>
                    
            </div>
            
        </footer>
        
    </body>
    
</html>