<?php 
//Dependencies
include('./include/config.inc.php');
include('./include/questionsShow.inc.php');
include('./include/testip.inc.php');
?>
<!DOCTYPE html>
<html lang="<?php echo SITELANGUAGE; ?>">
    
    <head>
    
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo SITEDISCRIPTION; ?>"> 
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
            <h2><?php echo HEADLINEQUESTIONSLIST ?></h2>
        	<form id="questionItems" action="./include/answerExam.inc.php" method="post" autocomplete="off">
        
                <?php 
                
                    if (testip()) {
				
                        questions_show(XMLQUESTIONSFILE);
                        
                    } else {

                        echo YOUALLREADYPLAYED;

                    }
				
				?>
				
				<input type="submit" id="submit" name="submit" value="<?php echo SUBMITBUTTONVALUE; ?>">
				
            </form>
        </div>
        
        <footer>
        
            <div class="container">
            
                <div class="row">
                    <div class="col-lg-12">

                        <?php echo FOOTERTEXT . HIGHSCORELINK; ?>

                    </div>
                </div>
                    
            </div>
            
        </footer>
        
    </body>
    
</html>