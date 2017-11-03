<?php require_once "Comptes/inc/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="favicon.ico"/>
        <title>Samy Hussaein</title>
        <meta name="description" content="Je m’appelle Samy Hussaein et je suis un jeune développeur et tech addict.">
        <meta name="keywords" content="Samy Hussaein, developper,EPITA, contact, cv, linkedin, tech, technologies, linux, geek"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow" />
        <meta name="author" content="Mysa"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
        <link rel="stylesheet" href="style/base.css">
        <link rel="stylesheet" href="style/style.css">
        <meta name="twitter:site" content="@SamyHussaein"/>
        <meta name="twitter:title" content="Samy Hussaein"/>
        <meta name="twitter:description" content="Geek, Developer & Tech Addict">
        <meta property="og:title" content="@SamyHussaein's WebSite" />
      	<meta property="og:description" content="Tech Addict, Developer & Geek, fascinated with new technology." />
      	<meta property="og:url" content="https://www.samyhussaein.com" />
      	<meta property="og:image" content="" />
      	<meta property="og:type" content="website" />
      	<meta property="og:site_name" content="Samy Hussaein" />
    </head>

    <body>
        <header>
            <div class="title-container" class="container">
                <img src="img/samy.png" alt="#" class="photo">
                <p class="title"> Samy HUSSAEIN | Engineering Student && Developer</p>
                <a href="en.php"> <img src="img/english-flag.png"  title="Changer la langue en anglais" alt="#" class="flags"> </a>
            </div>
        </header>

        <section>
            <div class="introduction" class="container">
                <p>Je m'appelle Samy HUSSAEIN, j'ai <?php Age(); ?> ans et je suis à la recherche d'un stage ou d'un CDD de Juillet à Décembre 2017.
                    <br> Actuellement en deuxième année à l'EPITA, j'ai des connaissances dans quelques domaines de programmation: </p>
                <ul>
                    <li>• C, j'ai réalisé en groupe un logiciel de reconnaissance optique de caractères. </li>
                    <li>• Une année d'expérience en C# (nous avions réalisé un jeu sur Unity, <a class="site" href="https://github.com/SasquatchYuja/GLaDDoS"><em>le git du projet</em></a>) </li>
                    <li>• Deux années d'expérience en Python</li>
                    <li>• Le développement web: HTML, CSS et PHP</li>
                </ul>
            </div>
        </section>

        <footer>
            <div class="liens" class="container">
                <a href="https://twitter.com/SamyHussaein" target="_blank" class="logos">
                    <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://github.com/SamyHussaein" target="_blank" class="logos">
                    <i class="fa fa-github fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://fr.linkedin.com/in/samyhussaein" target="_blank" class="logos">
                    <i class="fa fa-linkedin fa-3x" aria-hidden="true"></i>
                </a>
                <a href="mailto: contact@samyhussaein.com" target="_blank" class="logos">
                    <i class="fa fa-envelope-square fa-3x" aria-hidden="true"></i>
                </a>
                <a href="files/CV - Français.pdf" target="_blank" class="logos">
                    <i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i>
                </a>
                <br> <i class="fa fa-copyright"></i> 2016-2017 samyhussaein.com Tous droits réservés.
            </div>
        </footer>
    </body>
</html>
