<?php
    //Dependencies
    include('./include/show_highscore.inc.php');
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

            <h2><?php echo HEADHIGHSCOREPAGE; ?></h2>
    
            <div class="row">

                    <?php 
                    
                        showHighscore();
                    
                    ?>
               
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