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
        
        </div>
</div>
    </body>

</html>
<!-- <script src="script.js"></script> -->
<?php

