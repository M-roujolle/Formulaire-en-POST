<?php
require("controllers/controllerconnexion.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style.css">
    <title>TP PHP FORMULAIRE POST</title>
</head>

<body class="bg bg-dark text-white">



    <h1 class="text-center">Connexion</h1>

    <form method="POST" action="" class="ps-2 pe-2">
        <div class="mb-3">
            <label for="login" class="form-label">Mail / Pseudo</label>
            <input name="login" type="text" class="form-control" id="login">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>

        <div class="mb-3 form-check">
            <input name="checkbox" type="checkbox" class="form-check-input" id="checkbox">
            <label class="form-check-label" for="checkbox">Se souvenir de moi</label>
        </div>
        <span class="text-danger"><?= $arrayError["error"] ?? "" ?></span>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>

</body>

</html>