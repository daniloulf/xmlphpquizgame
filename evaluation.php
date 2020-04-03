<?php 
    session_start();
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
                    <?php 
                    
                        if (isset($_SESSION['score'])) {
                            echo '<p>' . $_SESSION['score'] . ' Score </p><br />';
                        } else { 
                            echo '<p>Session ist abgelaufen.</p>'; 
                        } 
                    
                    ?>
                </div>
                <div class="col-lg-4">
                    <?php 
                    if (isset($_SESSION['rightAnswers'])) {
                        echo '<p>' . $_SESSION['rightAnswers'] . ' Richtige Antworten </p><br />';
                    } else {
                        echo '<p>Session ist abgelaufen.</p>'; 
                    }
                    
                    ?>
                </div>
                <div class="col-lg-4">
                    <?php
                    if (isset($_SESSION['falseAnswers'])) {
                        echo '<p>' . $_SESSION['falseAnswers'] . ' Flasche Antworten </p><br />'; 
                    } else {
                        echo '<p>Session ist abgelaufen.</p>'; 
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

<?php 
    $_SESSION = array();
    session_destroy();
?>