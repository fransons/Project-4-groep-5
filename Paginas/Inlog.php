<?php
        $error = "niet de juiste gegevens ingevuld";
        ?>
<!doctype html>

<html>
    <head>
        <meta charset="utf-8"><meta http-equiv="language" content="NL">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
    	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 
        <title>MathKits</title>
        <link rel="stylesheet" type="text/css" href="CSS/Inloggen.css">
        <script src="JS/Inloggen.js"></script> 
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>

    <body>

    
        <header>
        <a href="index.php">
         <img src="images/logo.png" class="logo">
         <nav>
                <article class="nav">
                    <nav>
                       <ul id="menu">
                       <a class="hoofdnav" href="index.php"><li>Home</li></a>
                        <a class="hoofdnav" href="Inlog.php"><li>Inlog</li></a>
                        <a class="hoofdnav" href=".php"><li>Eenvoudig</li></a>
                        <a class="hoofdnav" href=".php"><li>Complex</li></a>
                        <a class="hoofdnav" href=".php"><li>Game</li></a>
                        <a class="hoofdnav" href=".php"><li>Presentatie</li></a>
                      
                      </ul>
                  </nav>
               </article>
            </nav>
        </header>

        <main>
        <article class="vak1">
            <p>Sign In</p>
        </article>

        <article class="Form">
        <form method="POST">
        
            <label></label><br><input type="text" name="username" class="user" placeholder= "Gebruikersnaam:"/><br>
            <br><input type="password" name="password" class="user" placeholder= "Wachtwoord:"/><br>
            <input type="submit" name="submit" value="Sign In" class="inloggen"/>
            
        </form>
        </article>
        
        <article class="achtergrondfoto">
            	<img src="images/logo.png">
        </article>
        </main>
        <footer>
            <article class="footer">
                <p class="footertekst">©Copyright MathKits 2021</p>
            </article>
        </footer>
        
    
    </body>
</html>

