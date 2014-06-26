<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Alternative a</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <header>
            <h1><strong>Alternative a</strong>: trouver la meilleur alternative gratuite et/ou open source de votre logiciel préféré</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li>Top</li>
            </ul>
        </nav>
        <section>
            <?php include("articles/article_mail.php"); ?>
            <?php include("articles/article_editeur_de_texte.php"); ?>
            <?php include("articles/article_moteur_de_recherches.php"); ?>
            <?php include("articles/article_navigateur.php"); ?>
            <?php include("articles/article_photoshop.php"); ?>
        </section>
    </body>
</html>
