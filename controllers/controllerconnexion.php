<?php
$login = '$2a$12$17pm1LNtoXmkEEIPk5jZnur1lyGl0mxaUASuQ2C7CHlr2peOt7h7S';
$password = '$2a$12$XgX1smkbHgiyFkGhgHUKLOFcwTgzO6esk1tLKQSj9AVErl8/Edh8O';

// var_dump($_POST);

if (!empty($_POST)) {
    if (empty($_POST["login"]) || empty($_POST["password"])) {
        $arrayError["error"] = "Veuillez saisir votre mot de passe et/ou login";
    } elseif (!password_verify($_POST["login"], $login) || !password_verify($_POST["password"], $password)) {
        $arrayError["error"] = "Mot de passe ou login invalide";
    } else {
        header("Location: welcome.php");
        exit;
    }
}
