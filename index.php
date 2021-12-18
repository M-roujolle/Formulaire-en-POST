<?php
require("controllers/controllerindex.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TP PHP FORMULAIRE POST</title>
</head>

<body class="bg bg-dark text-success">

    <!-- Nous testons si le POST n'est pas vide est que le tableau d'erreur est vide -->
    <!-- Si OK, nous affichons un lien vers connexion.php -->
    <!-- Sinon nous affichons le formulaire d'inscription -->
    <?php if (!empty($_POST) && empty($arrayError)) { ?>
        <div class="text-center ">
            <img src="https://media.giphy.com/media/xT0xezQGU5xCDJuCPe/giphy.gif">
        </div>
        <h1 class="text-center pt-5">Inscription validée, veuillez vous connecter</h1>
        <div class="text-center">
            <a class="btn btn-success mt-5" href="connexion.php">Connexion</a>
        </div>
    <?php } else { ?>
        <div class="bg bg-dark text-white">
            <h1 class="text-center">Inscription</h1>

            <form action="index.php" method="POST" class="ps-3 pe-3">
                <div class="mb-3 ">
                    <label for="nom" class="form-label">Nom : </label><span class="text-danger">
                        <?=
                        $arrayError["nom"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "" ?>" name="nom" type="text" class="form-control w-25" id="nom" placeholder="Ex : Dupont...">

                    <label for="prenom" class="form-label">Prénom : </label><span class="text-danger">
                        <?=
                        $arrayError["prenom"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "" ?>" name=" prenom" type="text" class="form-control w-25" id="prenom" placeholder="Ex : Jean...">

                    <label for="pseudo" class="form-label">Pseudo : </label><span class="text-danger">
                        <?=
                        $arrayError["pseudo"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["pseudo"]) ? htmlspecialchars($_POST["pseudo"]) : "" ?>" name=" pseudo" type="text" class="form-control w-25" id="pseudo" placeholder="Ex : DupontJean897...">
                </div>
                <div class="mb-3">
                    <label for="mdp" class="form-label">Mot de passe : </label><span class="text-danger">
                        <?=
                        $arrayError["mdp"] ?? " ";
                        ?>
                    </span>

                    <!-- Nous ne gardons pas en mémoire la valeur du MDP : obliger l'utilisateur a réecrire le MDP -->
                    <input name="mdp" type="password" class="form-control w-25" id="mdp">

                    <label for="confMdp" class="form-label">Confirmation du mot de passe : </label><span class="text-danger">
                        <?=
                        $arrayError["confMdp"] ?? " ";
                        ?>
                    </span>
                    <input name="confMdp" type="password" class="form-control w-25" id="confMdp">

                    <label for="url" class="form-label">URL Github : </label><span class="text-danger">
                        <?=
                        $arrayError["url"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["url"]) ? htmlspecialchars($_POST["url"]) : "" ?>" name="url" type="text" class="form-control w-25" id="url" placeholder="Ex : http://mon-site@site.fr...">
                </div>
                <div class="mb-3 form-check">

                    <!-- Nous ne gardons pas en valeur la checkBox, nous forçons l'utilisateur a re valider -->
                    <input type="checkbox" class="form-check-input" name="checkBox" id="checkBox">
                    <label class="form-check-label" for="checkBox">Accepter les CGU</label><span class="text-danger">
                        <?=
                        $arrayError["checkBox"] ?? " ";
                        ?>
                    </span>
                </div>
                <button type="submit" class="btn btn-primary mb-5">Inscription</button>
            </form>
        </div>
    <?php } ?>


</body>

</html>