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
    <meta name="description" content="SamyHussaein, Samy, Hussaein, geek, developer, engineer, samy, hussaein, @SamyHussaein, twitter, linkedin, github, facebook">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samy Hussein</title>
    <link href="https://fonts.googleapis.com/css?family=Days+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <link rel="stylesheet" href="style/base.css">
    <link rel="stylesheet" href="style/style.css">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@SamyHussaein" />
    <meta name="twitter:title" content="Samy Hussaein" />
    <link rel="icon" type="image/png" href="img/samy.png" />


</head>

<body>

<header>
    <p class="title"> Samy HUSSAEIN | Engineering Student & Developer </p>
</header>
<section>
    <div class="introduction">
        <p>Moi c'est Samy HUSSAEIN et j'ai actuellement 20 ans.
            <br> Je suis en apprentissage à l'EPITA (Cycle préparatoire) et j'ai des connaissances dans quelques domaines de programmation et développement: </p>
        <ul>
            <li>• Une année d'expérience en C# (nous avions réalisé un jeu sur Unity, <a class="site" href="https://github.com/SasquatchYuja/GLaDDoS"><em>le git du projet</em></a>) </li>
            <li>• Deux années d'expérience en Python</li>
            <li>• Le développement web: html, css et php</li>
        </ul>
    </div>
</section>

<footer>
    <div class="liens">
        <a href="https://twitter.com/SamyHussaein" target="_blank" class="logos">
            <img class="space" src="img/icone%20tweetter.png" alt="logo twitter" width="50px" height="50px">
        </a>
        <a href="https://github.com/omar94250" target="_blank" class="logos">
            <img class="space" src="img/github-logo.png" alt="logo gitnub" width="50px" height="50px">
        </a>
        <a href="https://fr.linkedin.com/in/samyhussaein" target="_blank" class="logos">
            <img class="space" src="img/icone%20li,kedin.png" alt="logo linkedin" width="50px" height="50px"> </a>
    </div>
    <div class="signature">
        <table>
            <tr>
                <td valign="top" style="padding:0 8px 0 0;">
                    <a><img src="img/epita_logo.png" /></a>
                </td>
                <td valign="top" style="font-size:80%;font-family:Helvetica;border-left:3px solid;border-color:#1aa3db;padding:0 0 0 8px;">
                    <div style="font-size:1.2em;">
                        <br/>&nbsp;Samy Hussaein</div><span><span style="font-size:0.9em;font-weight:bold;">&nbsp; EPITA</span>,&nbsp;</span><span style="font-size:0.9em;">INFO SUP B1</span>
                    <div style="font-size:0.9em;"><font color="#1aa3db"><a href="mailto: samy.hussaein@epita.fr" class="sign">samy.hussaein@epita.fr</a></div><div style="line-height:1em;font-size:1em;">&nbsp;</div><div></div><div></div><div style="line-height:1em;font-size:1em;"></div></td></tr></table><div style="line-height:10px;font-size:10px;"></div>

    </div>
</footer>
</body>