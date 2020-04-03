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
        <meta name="author" content="Danilo Ulf Mattick">

        <title>XML PHP Quiz System</title>

        <link href="./css/bootstrap.min.css" rel="stylesheet" />
        <link href="./css/bootstrap-theme.min.css" rel="stylesheet" />
        <link href="./css/style.css" rel="stylesheet" media="screen" />
        
    </head>

    <body>
        <header>
			<div class="container">
				<h1>
					dum//planet Quiz Spass
				</h1>
			</div>
        </header>
        
        <div class="content container">
        
            <div class="row">
                <div class="col-lg-4">
                    <h2>Punktzahl</h2>
                    <?php 
                    
                        if (isset($_SESSION['score'])) {
                            echo '<p>' . $_SESSION['score'] . ' Score </p><br />';
                        } else { 
                            echo '<p>Session ist abgelaufen.</p>'; 
                        } 
                    
                    ?>
                </div>
                <div class="col-lg-4">
                    <h2>Richtige Antworten</h2>
                    <?php 
                    if (isset($_SESSION['rightAnswers'])) {
                        echo '<p>' . $_SESSION['rightAnswers'] . ' Richtige Antworten </p><br />';
                    } else {
                        echo '<p>Session ist abgelaufen.</p>'; 
                    }
                    
                    ?>
                </div>
                <div class="col-lg-4">
                    <h2>Falsche Antworten</h2>
                    <?php
                    if (isset($_SESSION['falseAnswers'])) {
                        echo '<p>' . $_SESSION['falseAnswers'] . ' Flasche Antworten </p><br />'; 
                    } else {
                        echo '<p>Session ist abgelaufen.</p>'; 
                    }
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <label for="name">Ihr Name</label><input id="name" type="text" minlength="3" maxlength="8" require name="name" /><br />
                        <input type="submit" name="submit" value="Senden" />
                    </form>
                </div>

                <div class="col-lg-6">
                    <?php 
                        
                        if (isset($_POST['submit'])) {

                            if (isset($_POST['name'])) echo '<p><strong> Tank you ' . $_POST['name'] . '!</strong></p>';

                            writeXML($xmlHighscore, $_POST['name'], $_SESSION['score'], $_SESSION['rightAnswers'], $_SESSION['falseAnswers'], $_SESSION['userip']);

                            echo '<p class="fileupdate-msg">File was updated</p>';
                            if (isset($_SESSION['userip'])) echo $_SESSION['userip'];
                            $_SESSION = array();
                            session_destroy();

                        }
                    ?>
                </div>
            </div>

        </div>
        
        <footer>
        
            <div class="container">
            
                <div class="row">
                    <div class="col-lg-12">

                        <p>&copy; <script>document.write(new Date().getFullYear()); </script> by the Creator &mdash; Alle Rechte vorbehalten!</p>

                    </div>
                </div>
                    
            </div>
            
        </footer>
        
    </body>
    
</html>