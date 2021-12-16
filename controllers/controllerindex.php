<?php
// var_dump($_POST);
$regexNom = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}$/u";
$regexPseudo = "/^[0123456789a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]{2,30}$/u";
$arrayError = [];

if (!empty($_POST)) {

    if (isset($_POST["nom"])) {
        if (empty($_POST["nom"])) {
            $arrayError["nom"] = "Veuillez saisir votre nom";
        } elseif (!preg_match($regexNom, $_POST["nom"])) {
            $arrayError["nom"] = "Format invalide";
        }
    }

    if (isset($_POST["prenom"])) {
        if (empty($_POST["prenom"])) {
            $arrayError["prenom"] = "Veuillez saisir votre prenom";
        } elseif (!preg_match($regexNom, $_POST["prenom"])) {
            $arrayError["prenom"] = "Format invalide";
        }
    }

    if (isset($_POST["pseudo"])) {
        if (empty($_POST["pseudo"])) {
            $arrayError["pseudo"] = "Veuillez saisir votre pseudo";
        } elseif (!preg_match($regexPseudo, $_POST["pseudo"])) {
            $arrayError["pseudo"] = "Format invalide";
        }
    }

    if (isset($_POST["mdp"])) {
        if (empty($_POST["mdp"])) {
            $arrayError["mdp"] = "Veuillez saisir votre mot de passe";
        }
    }

    if (isset($_POST["confMdp"])) {
        if (empty($_POST["confMdp"])) {
            $arrayError["confMdp"] = "Veuillez confirmer votre mot de passe";
        } elseif ($_POST["mdp"] != $_POST["confMdp"]) {
            $arrayError["confMdp"] = "Les mots de passe ne sont pas identique ! ";
        }
    }

    if (isset($_POST["url"])) {
        if (empty($_POST["url"])) {
            $arrayError["url"] = "Veuillez saisir votre url";
        } elseif (!filter_var($_POST["url"], FILTER_VALIDATE_URL)) {
            $arrayError["url"] = "Veuillez saisir une URL valide";
        }
    }

    if (!isset($_POST["checkBox"])) {
        $arrayError["checkBox"] = "Veuillez valider les CGU";
    }
}
