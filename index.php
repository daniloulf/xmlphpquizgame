<?php 
//Dependencies
include('./include/config.inc.php');
include('./include/questionsShow.inc.php');
?>
<!DOCTYPE html>
<html lang="de">
    
    <head>
    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content=""> 
        <meta name="author" content="Danilo Ulf Mattick">

        <title>PHP Quiz System</title>

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
			<form id="questionItems" action="./include/answerExam.inc.php" method="post" autocomplete="off">
        
				<?php 
				
					questions_show($xmlDBfile);
				
				?>
				
				<input type="submit" id="submit" name="submit" value="Antworten prüfen">
				
            </form>
        </div>
        
        <footer>
        
            <div class="container">
            
                <div class="row">
                    <div class="col-lg-12">

                        <p>Alle Rechte vorbehalten!</p>

                    </div>
                </div>
                    
            </div>
            
        </footer>
        
    </body>
    
</html>