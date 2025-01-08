<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Connexion user">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header>
        <h2>Connectez-vous à votre espace client</h2>
    </header>
    <?php
        include_once __DIR__ .'/controller/session.inc.php'
        /* quelque chose ici */

    ?>
    <main>
        <fieldset>
            <legend>Votre connexion sécurisée</legend>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <label for="username">Nom d'utilisateur:</label><br>
                <input type="text" id="username" name="username"><br><br>
                <label for="password">Mot de passe:</label><br>
                <input type="password" id="password" name="password"><br><br>
                <input type="submit" value="Connexion">
            </form>
        </fieldset>
        <?php
            include_once __DIR__ .'/controller/connect.php';
        ?>
    </main>
    <!-- <pre> -->
        <?php
           
           # print_r($_SERVER)
         

        ?>
    <!-- </pre> -->
</body>
</html>
