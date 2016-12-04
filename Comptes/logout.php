<?php
session_start();
unset($_SESSION['auth']);
$_SESSION['flash']['success'] = "Vous vous êtes bien déconnecté !";
header('Location: login.php');