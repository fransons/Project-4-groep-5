<?php

$error = "";
    if(isset($_POST['submit'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])) {
            require("dbconnect.php");
            $sql = "SELECT * FROM gebruikers WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
           
            if($result = $conn->query($sql)){
                $aantal = $result->num_rows;
            }else{
                $error = "query niet gelukt";
            }


     if($aantal == 1 ){
         session_start();
         $_SESSION['ingelogd'] = true;
         header("Location: index.php");
     }else{
         $error = "Niet de juiste gegevens ingevuld";
     }
    }else{
        $error = "vul je gegevens in";
    }
}
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
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    </head>

    <body>

    
        <header>
        <a href="inlog.php">
         <img src="images/logo.png" class="logo">
         <nav>
                <article class="nav">
                    <nav>
                       <ul id="menu">
                       
                        <a class="hoofdnav" href="Inlog.php"><li>Inlog</li></a>
                        <a class="hoofdnav" href="presen.php"><li>Presentatie</li></a>
                      
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
        <form method="post" action="">
        
            <input type='text' name='username' class="user" placeholder="Gebruikersnaam">
           <br> <br> <input type='password' name='password' class="user" placeholder="Wachtwoord"><br><br>
            <input type='submit' name='submit' class="inloggen">
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