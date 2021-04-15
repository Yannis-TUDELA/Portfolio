<?php

    $erreur = "";

if(isset($_POST["submit"])) {

    $nom = $_POST["name"];
    $mailFrom = $_POST["mail"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];
    
    if(!(empty($nom))) {

        if(!(empty($mailFrom))) {
        
                if(!(empty($objet))) {
                    
                    if(!(empty($message))) {
                            $mailTo = "tudela.yannis@gmail.com";

                            $texte = "Vous avez recu un mail de ".$nom. ". Son mail est " . $mailFrom . ".\n\n".$message;
                        
                            mail($mailTo, $objet, $texte);

                            $erreur = "<font color='#7dd11c'>Votre mail a bien été envoyé</font>";

                    } else {
                        $erreur = "Veuillez saisir un message";
                    }
                } else {
                    $erreur = "Veuillez saisir l'objet de votre mail";
                }
        } else {
            $erreur = "Veuillez saisir votre E-mail";
        }
    } else {
        $erreur = "Veuillez saisir votre nom";
    }
}
?>

<!DOCTYPE html>

<html lang="fr">

    <head>
        <title>
            TUDELA Yannis | Contact 
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0">
        <link rel="stylesheet" href="../style/styleCo.css">
        <link rel="stylesheet" href="../style/haut-bas.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Slabo+27px&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="image/Logo.png"/>
    </head>

    
    <body >
        <header>

            <a href="../index.html" class="lien" id="Nom">TUDELA Yannis</a>              

            <nav>
                <a href="./Apropos.html" class="lien" id="Apropos">A propos</a>
                <a href="./Projet.html" class="lien" id="Projet">Projets</a>
                <a href="./Competence.html" class="lien" id="Competence">Compétences</a>            
                <a href="./Contact.html" class="lien" id="Contact">Contact</a>
            </nav> 

            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>

        </header>  

       
        <main class="liste"> 
                <h1 class="Titre">Contact</h1>
                <p class="sous-titre">Voici les différentes méthodes pour me contacter</p>    

                <p>Email : <a class="a-survol" target="_blank" href="mailto:tudela.yannis@gmail.com">
                    tudela.yannis@gmail.com </a> 
                </p>  

                <p>Linkedin : <a class="a-survol" target="_blank" href="https://www.linkedin.com/in/yannis-tudela-41b8351b7/">
                    Yannis TUDELA </a> 
                </p>
                
                <p>GitHub : <a class="a-survol" target="_blank" href="https://github.com/Yannis-TUDELA">
                    Yannis-TUDELA </a> 
                </p>        
                
                <p class="me-contacter">M'envoyer un mail</p>
                <form class="contact-form" action="" method="post">
                    <input class="contact" type="text" name="name" placeholder="Votre nom">
                    <input class="contact" type="text" name="mail" placeholder="Votre E-mail">
                    <input class="contact" type="text" name="objet" placeholder="Objet du mail">
                    <textarea class="contact" id="text-area" name="message" placeholder="Votre message"></textarea>
                    <button class="contact" id="bouton" type="submit" name="submit">Envoyer</button>
                </form>
                    <div class="msg-erreur">
                        <?php
                            if(!empty($erreur)) {
                                echo $erreur;
                            }
                        ?>
                    </div>
        </main> 

        <footer>
            <p>Yannis TUDELA © | 2020 </p>       
            <p> 
            <a class="logo" target="_blank" href="https://www.linkedin.com/in/yannis-tudela-41b8351b7/">
                <img src="../image/iconmonstr-linkedin-3.svg" alt="linkedin"> 
            </a>
            <a class="logo" target="_blank" href="https://github.com/Yannis-TUDELA">
                <img src="../image/iconmonstr-github-3.svg" alt="github">  
            </a>
            </p>    
        </footer>
        <script src="../JS/index.js"></script>
    </body>
</html>