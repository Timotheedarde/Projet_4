<!doctype html>
<html lang="fr">
    <head>
        <?php include("Vue/includes/head.php"); ?>
    </head>
    
    <body>
        <div class="global">
            <nav class="navbar navbar-inverse">
                <?php include("Vue/includes/nav.php"); ?>
            </nav>
            
            <div class="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <footer class="piedBlog">
                <?php include("Vue/includes/footer.php"); ?>
            </footer>
        </div> <!-- #global -->
    </body>
    <div class="script">
        <?php include("Vue/includes/script.php"); ?>
    </div>
</html>