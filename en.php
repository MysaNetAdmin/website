<?php require_once "Comptes/inc/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Je m’appelle Samy Hussaein et je suis un jeune développer et tech addict.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow" />
        <title>Samy Hussaein</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
        <link rel="stylesheet" href="style/base.css">
        <link rel="stylesheet" href="style/style.css">
        <meta name="twitter:card" content="Geek, developer and tech addict"/>
        <meta name="twitter:site" content="@SamyHussaein"/>
        <meta name="twitter:title" content="Samy Hussaein"/>
        <link rel="icon" href="favicon.ico"/>
    </head>

    <body>
        <header>
            <div class="title-container" class="container">
                <img src="img/samy.png" class="photo">
                <p class="title"> Samy HUSSAEIN | Engineering Student & Developer</p>
                <a href="index.php" target="_blank"> <img src="img/french-flag.png" class="flags"> </a>
                <a href="index-anglais.php" target="_blank"> <img src="img/english-flag.png" class="flags"> </a>
            </div>
        </header>

        <section>
            <div class="introduction" class="container">
                <p>My name is Samy HUSSAEIN and I'm <?php Age(); ?> ans.
                    <br> I am a second year EPITA student and I have a few knowledge in  </p>
                <ul>
                    <li>• Une année d'expérience en C# (nous avions réalisé un jeu sur Unity, <a class="site" href="https://github.com/SasquatchYuja/GLaDDoS"><em>le git du projet</em></a>) </li>
                    <li>• Deux années d'expérience en Python</li>
                    <li>• Web Developtment: html, css et php</li>
                </ul>
            </div>
        </section>

        <footer>
            <div class="liens" class="container">
                <a href="https://twitter.com/SamyHussaein" target="_blank" class="logos">
                    <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://github.com/omar94250" target="_blank" class="logos">
                    <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://fr.linkedin.com/in/samyhussaein" target="_blank" class="logos">
                    <i class="fa fa-linkedin fa-3x" aria-hidden="true"></i>
                </a>
                <a href="mailto: contact@samyhussaein.com" target="_blank" class="logos">
                    <i class="fa fa-envelope-square fa-3x" aria-hidden="true"></i>
                </a>
                <a href="files/CV - Anglais.pdf" target="_blank" class="logos">
                    <i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i>
                </a>
                <br> <i class="fa fa-copyright"></i> 2016-2017 samyhussaein.com Tous droits réservés
            </div>
        </footer>
    </body>
</html>
