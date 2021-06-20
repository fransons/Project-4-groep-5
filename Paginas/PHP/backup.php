<?php
      $error = "";  
        if (isset($_POST['submit'])) {

            If (!empty($_POST['username']) && !empty($_POST['password'])) {

                require("dbconnect.php");
                $username = trim($_POST['username']);
                $password = md5(trim($_POST['password']));

                $sql = "SELECT * FROM gebruikers WHERE username = '" . $username . "' AND password = '" . $pass . "'";

                if ($result = $conn->query($sql)){
                    $aantal = $result->num_rows;
                    if ($result = $conn->query($sql)) {
                        $aantal = $result->num_rows;

                        if ($aantal == 1) {
                            session_start();
                            $_SESSION['voornaam'] = $username;
                            $_SESSION['ingelogd'] = true;
                            header("Location:inglogd.php");
                        }else{
                            $error = "niet de juiste gegevens ingevuld";
                        }
                    }
                }else{
                    $error = "Username en wachtwoord zijn verplicht";
                }
            
        ?>