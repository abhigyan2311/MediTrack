<?php
session_start();
		if($_SESSION["username"]) 
		{
			
			
			
			
		
		}
		
		else
		{
			echo "You are not logged in";
			echo "<br>";
		}
		
	?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>MediTrack</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="CSS buttons with pseudo-elements" />
        <meta name="keywords" content="css, css3, pseudo, buttons, anchor, before, after, web design" />
        <meta name="author" content="Sergio Camalich for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css1/demo.css" />
        <link rel="stylesheet" type="text/css" href="css1/style4.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<style>
p{
    font-size: 250%;
}


</style>
    </head>
    <body>
        <div class="container">
			<!-- Codrops top bar -->
           
			<header>
                </br></br>
                <h1><?php echo "Welcome  Mr.".$_SESSION["username"];?> </h1>
               
			</header>
			<section>
                <div id="container_buttons">
                    <p>
                     <p>
                        <a href="view/shopcity.php" class="a_demo_four">
                            Customer's of city
                            
                        </a>
                    </p>
                        <p>
                        <a href="view/shopmed.php" class="a_demo_four">
                            Search by medicine
                            
                        </a>
                    </p>
                        <p>
                        <a href="view/medical.php" class="a_demo_four">
                            Search Medical Shop
                            
                        </a>
                    </p>
                     <p>
                        <a href="logout.php" class="a_demo_four">
                            Logout
                            
                        </a>
                    </p>
                    
                </div>
			</section>
        </div>
    </body>
</html>