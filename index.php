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

    <title>TP PHP FORMULAIRE POST</title>
</head>

<body>

    <!-- Nous testons si le POST n'est pas vide est que le tableau d'erreur est vide -->
    <!-- Si OK, nous affichons un lien vers connexion.php -->
    <!-- Sinon nous affichons le formulaire d'inscription -->
    <?php if (!empty($_POST) && empty($arrayError)) { ?>
        <p>Inscription OK, veuillez vous connecter</p>
        <a class="btn btn-outline-primary" href="connexion.php">Connexion</a>
    <?php } else { ?>
        <div class="bg bg-dark text-white">
            <h1 class="text-center">Inscription</h1>

            <form action="index.php" method="POST">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom : </label><span class="text-danger">
                        <?=
                        $arrayError["nom"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "" ?>" name="nom" type="text" class="form-control" id="nom" placeholder="Ex : Dupont...">

                    <label for="prenom" class="form-label">Prénom : </label><span class="text-danger">
                        <?=
                        $arrayError["prenom"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "" ?>" name=" prenom" type="text" class="form-control" id="prenom" placeholder="Ex : Jean...">

                    <label for="pseudo" class="form-label">Pseudo : </label><span class="text-danger">
                        <?=
                        $arrayError["pseudo"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["pseudo"]) ? htmlspecialchars($_POST["pseudo"]) : "" ?>" name=" pseudo" type="text" class="form-control" id="pseudo" placeholder="Ex : DupontJean897...">
                </div>
                <div class="mb-3">
                    <label for="mdp" class="form-label">Mot de passe : </label><span class="text-danger">
                        <?=
                        $arrayError["mdp"] ?? " ";
                        ?>
                    </span>

                    <!-- Nous ne gardons pas en mémoire la valeur du MDP : obliger l'utilisateur a réecrire le MDP -->
                    <input name="mdp" type="password" class="form-control" id="mdp">

                    <label for="confMdp" class="form-label">Confirmation du mot de passe : </label><span class="text-danger">
                        <?=
                        $arrayError["confMdp"] ?? " ";
                        ?>
                    </span>
                    <input name="confMdp" type="password" class="form-control" id="confMdp">

                    <label for="url" class="form-label">URL Github : </label><span class="text-danger">
                        <?=
                        $arrayError["url"] ?? " ";
                        ?>
                    </span>
                    <input name="url" type="text" class="form-control" id="url" placeholder="Ex : http://mon-site@site.fr...">
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
                <button type="submit" class="btn btn-primary">Inscription</button>
            </form>
            <a href="connexion.php">ALLER SUR CONNEXION</a>
        </div>
    <?php } ?>


</body>

</html>