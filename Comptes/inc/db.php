<?php

$pdo = new PDO('mysql:dbname=c99Samy;host=localhost', 'c99Mysa', 'samy1863');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);