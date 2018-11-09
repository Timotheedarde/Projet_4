<!doctype html>
<html lang="fr">
    <head>
        <?php include("Vue/includes/head.php"); ?>
    </head>
    
    <body>
        <div id="global">
            <nav class="navbar navbar-inverse">
                <?php include("Vue/includes/nav.php"); ?>
            </nav>
            
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                <?php include("Vue/includes/footer.php"); ?>
            </footer>
        </div> <!-- #global -->
    </body>
    <div id="script">
        <?php include("Vue/includes/script.php"); ?>
    </div>
</html>