<!DOCTYPE html>
<html>

    <head>
        <?php include ("head.php");?>
    </head>

    <body>
        <header>
            <h1>Crisis Signalement</h1>
        </header>        

        <?php include ("carousel.php"); ?>

        <nav class="sig_buttons">
            <button class="red" onclick="location.href='./signaler.php'">Signaler un incident</button>
            <button class="green" onclick="location.href='./safe.php'">Signaler en sécurité</button>
        </nav>

        <footer>
            <nav>
                <ul>
                    <li><a href="contact.php">Nous contacter</a></li>
                </ul>
            </nav>

        </footer>

    </body>

</html>
<!-- <script src="script.js"></script> -->
<?php

