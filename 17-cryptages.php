<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cryptage</h1>
    <h2>Ne jamais utliser un site externe pour créer vos mots de passe</h2>
    <form action="" method="post" name="pwd">
        <input type="password" name="aPassword" required>
        <input type="submit">

    </form>
    <?php
    var_dump($_POST);
    ?>
    <h2>MD5</h2>
    <p>à ne plus utiliser, trop rapide et donc peu sécurisé (déjà cassé)</p>
    <p><?php
    echo md5($_POST['aPassword'])
    ?></p>
</body>
</html>