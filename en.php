<?php require_once "Comptes/inc/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="favicon.ico"/>
        <title>Samy Hussaein, Tech Addict & Developer</title>
        <meta name="description" content="Je m’appelle Samy Hussaein et je suis un jeune développeur et tech addict.">
        <meta name="keywords" content="Samy Hussaein,développeur,EPITA, contact, cv, linkedin, tech, technologies, linux, geek"/>
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
        <meta name="twitter:description" content="Geek, developer and tech addict">
        <meta property="og:title" content="@SamyHussaein's WebSite" />
        <meta property="og:description" content="Innovation & Tech Lover — Developer, Engineering Student, Geek & Sci-Fan." />
        <meta property="og:url" content="https://www.samyhussaein.com" />
        <meta property="og:image" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Samy Hussaein" />
    </head>

    <body>
        <header>
            <div class="title-container" class="container">
                <img src="img/samy.png" alt="#" class="photo">
                <p class="title"> Samy HUSSAEIN | Engineering Student & Developer</p>
                <a href="index.php"> <img src="img/french-flag.png" title="Switch language to french" alt="#" class="flags"> </a>
            </div>
        </header>

        <section>
            <div class="introduction" class="container">
                <p>My name is Samy HUSSAEIN, I'm <?php Age(); ?> years old and currently looking for a internship from July to December 2017.
                    <br> Actually a second year EPITA student, I have some knowledge in theses few domains of programmation:  </p>
                <ul>
                    <li>• C, we recently done with a group an Optical Character Recognition Sofware.</li>
                    <li>• One year experience in C# (we had to make a game, <a class="site" href="https://github.com/SasquatchYuja/GLaDDoS"><em>the game git repository</em></a>) </li>
                    <li>• Two years experiences in Python</li>
                    <li>• Web Development: HTML, CSS and PHP</li>
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
                <br> <i class="fa fa-copyright"></i> 2016-2017 samyhussaein.com All rights reserved.
            </div>
        </footer>
    </body>
</html>
