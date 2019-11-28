<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="vendor/knacss.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <link rel="stylesheet" href="public/css/styles.css"/>
        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>
    </head>

    <body>
        <!-- HEADER -->
        <header>
            <div class="wrapper autogrid">
                <div>
                    <i class="fas fa-adjust fa-2x"></i>
                </div>
                <div class="txtright">
                    <div class="burger">
                        <div class="clic">
                            <i class="fas fa-bars fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="wrapper">
                <ul class="txtcenter">
                    <li><a href="index.php?action=listPosts">Accueil</a></li>
                    <li><a href="index.php?action=listPosts#chapitres">Chapitres</a></li>
                    <li><a href="#" class="scroll">L'auteur</a></li>
                    <li><a href="index.php?action=loginAdmin">Connexion</a></li>
                </ul>
            </nav>
        </header>

        <!-- CONTENU -->
        <?= $content ?>

        <!-- FOOTER -->
        <footer class="txtcenter">
            <a href="#">Mentions légales</a>
        </footer>

        <script
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>
        <script src="public/js/main.js"></script>
    </body>
</html>