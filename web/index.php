<!DOCTYPE html>
<html>

    <head>
        <?php include ("head.php");?>
    </head>

    <body>
    <!---    <header>
            <h1>Crisis Signalement</h1>
        </header>        
-->


			<nav class="navbar navbar-default navbar-fixed-top">

				<div class="navbar-header">
						<a class="navbar-brand" href="#">BugBusters Crisis Manager</a>
						<button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbarCollapsed" data-toggle="collapse" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="navbarCollapsed" class="collapse navbar-collapse">	
						<ul class="nav navbar-nav">
							<li class="active"><a href="#monCarousel">What is BBCM ?</a></li>
							<li><a href="#map">Watch the map !</a></li>
							<li><a href="#about">About us</a></li>
						</ul>
					</div>
				
				
					
				</div>
				
				
			</div>
		</nav>
        <?php include ("carousel.php"); ?>

        <nav class="sig_buttons">
            <button class="big_button red" onclick="location.href='./signaler.php'">Signaler un incident</button>
            <button class="big_button green" onclick="location.href='./safe.php'">Signaler en sécurité</button>
        </nav>


        <?php include("map.php");?>

        <div id="about">
        Nous sommes une équipe d'étudiants de l'ESIEA participant à la Nuit de l'Info 2015.
        Après les divers événements ayant eu lieu dans le monde récemment, nous avons imaginé et développé une web application simple et pratique 
        pour les cas d'extrême urgence.
        <div>
            <a href="http://kernel.panic.systems"><img id="logo" width="100px" height="100px" src="http://kernel.panic.systems/img/logoheader.png"/></a>
            <a href="http://www.esiea.fr"><img id="logo" src="http://www.esiea.fr/wp-content/uploads/2014/09/Logo-ESIEA.jpg"/></a>
            <a href="http://www.intechinfo.fr"><img id="logo" src="https://candidature.intechinfo.fr/Content/images/INTECHINFO/logo.png"/></a>

        </div>
    </div>        
        </div>
</div>
    </body>

</html>
<!-- <script src="script.js"></script> -->
<?php

