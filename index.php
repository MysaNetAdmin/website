<?php
session_start();
if(!isset($_SESSION['auth']) && empty($_SESISON['auth']))
{
    $_SESSION['flash']['danger']="Accès non autorisé: Connectez vous d'abord !";
    header('Location: Comptes/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Samy Hussaein</title>
    <meta name="keywords" content="SamyHussaein, Samy, Hussaein, geek,developer, engineer, samy, hussaein, @SamyHussaein, twitter, linkedin, github, facebook"/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@SamyHussaein" />
    <meta name="twitter:title" content="Samy Hussaein" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Gentium+Basic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="titles">
    <header>
        <nav>
            <p class="title"> Samy HUSSAEIN | Engineering Student & Developer </p>
        </nav>
    </header>

    <div class="introduction">
        <p>Bonjour <?= $_SESSION['auth']->username; ?>. Je me présente: je m'apelle Samy HUSSAEIN et j'ai actuellement 20 ans.<p>
        <p>
            Je suis en apprentissage à l'EPITA (Cycle préparatoire) et j'ai des connaissances dans quelques domaines de programmation et développement::
        <ul>
            <li>Une année d'expérience en C# (nous avions réaliser un jeux sur Unity,<a href="https://github.com/SasquatchYuja/GLaDDoS">le git du projet</a>) </li>
            <li>Deux années d'expérience en Python</li>
            <li>Le dévelopement web: html, css et php</li>
        </ul>
        </p>
    </div>

    <div class="liens">
        <a href="https://twitter.com/SamyHussaein" target = "_blank" class="logos">
            <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
        </a>
        <a href="https://github.com/omar94250" target = "_blank" class="logos">
            <i class="fa fa-github fa-3x" aria-hidden="true"></i>
        </a>
        <a href="https://fr.linkedin.com/in/samyhussaein" target = "_blank" class="logos">
            <i class="fa fa-linkedin fa-3x" aria-hidden="true"></i>
        </a>
    </div>
</div>

<div class="signature">
    <table><tr><td valign="top" style="padding:0 8px 0 0;"><img src="img/epita_logo.png"/></a></td><td valign="top" style="font-size:80%;font-family:Helvetica;border-left:3px solid;border-color:#1aa3db;padding:0 0 0 8px;"><div style="font-size:1.2em;"><br/>&nbsp;Samy Hussaein</div><span><span style="font-size:0.9em;font-weight:bold;">&nbsp; EPITA</span>,&nbsp;</span><span style="font-size:0.9em;">INFO SUP B1</span><div style="font-size:0.9em;"><font color="#1aa3db"><a href="mailto: samy.hussaein@epita.fr" class="sign">samy.hussaein@epita.fr</a></div><div style="line-height:1em;font-size:1em;">&nbsp;</div><div></div><div></div><div style="line-height:1em;font-size:1em;"></div></td></tr></table><div style="line-height:10px;font-size:10px;"></div>
</div>
</body>
</html>