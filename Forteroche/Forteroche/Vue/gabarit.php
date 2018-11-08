<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="public/bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <base href="<?= $racineWeb ?>" >
        <link rel="stylesheet" href="public/css/style.css" rel="stylesheet" />
        <title><?= $titre ?></title> 
    </head>
    
    <body>
        <div id="global">
            <nav class="navbar navbar-inverse">
                <?php include("Vue/includes/nav.php"); ?>
            </nav>
            <header>
                <?php include("Vue/includes/header.php"); ?>
            </header>
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