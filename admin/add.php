<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../connexion.php";
    $connexion = new connexion();
    $sql = "INSERT INTO `produit` (`id`, `libelle`, `prix`, `qte`, `desc`, `image`, `promo`) VALUES (NULL, 'cable vga', 20, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit aspernatur ea. Necessitatibus aliquam, rem dolore unde repellat quae nisi architecto accusantium debitis, aspernatur deleniti eveniet eos, suscipit odio ullam.', 'https://picsum.photos/images/200/200', 0)";
    $pdo=$connexion->getConnexion();
    $pdo->exec($sql);
    ?>
</body>

</html>