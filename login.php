<?php
   session_start();
   if(isset($_POST["valider"]))
   {
       $valider=$_POST["valider"];
       
    if(isset($_POST["username"]))
    {
        $login=$_POST["username"];
    }
    if(isset($_POST["password"]))
    {
        $pass=$_POST["password"];
    }

   }
   include('connexiondb.php'); // Fichier PHP contenant la connexion à votre BDD

   $query = "SELECT login,password FROM users WHERE login=? and password=? limit 1";
   $stmt = $conn->prepare($query);
   $stmt->execute(array($login,$pass));

   if ($stmt->rowCount()>0)
    {
        $data = $stmt->fetchAll();

        if ( password_verify($pass,$data[0]["password"]) )
        {
            $_SESSION["login"] = $login;
        }
       

    }
    else
    {
        echo " mdp incorrect ";
    }
    
    
?>
