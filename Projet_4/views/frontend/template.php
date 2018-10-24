<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include("view/portionPageInclude/head.php"); ?>
    </head>

    <header>
        <?php include("view/portionPageInclude/menu.php"); ?>
        <h1><a href="<?= URL?>">Blog de Jean FORTEROCHE</a></h1>
        <p>Bienvenue</p>
    </header>

    <body>
         

        <?= $content ?>

        <?php include("view/portionPageInclude/script.php"); ?> 
    </body>

    <footer>
        <?php include("view/portionPageInclude/footer.php"); ?>
    </footer>


</html>
