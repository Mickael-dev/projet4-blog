<?php $title = 'Connexion'; ?>

<?php ob_start(); ?>

<section class="intro-inner-page flex-container">
    <div class="item-center">
        <h1>
            Connexion à l'administration
        </h1>
    </div>
</section>

<section class="ptl pbl">
    <div class="wrapper txtcenter">

        <form action="index.php?action=signin" method="post">
            <label for="Login">Identifiant</label>
              <input type="login" class="form-control" placeholder="Votre identifiant" name="login" required=""/><br>
              <label for="Password">Mot de Passe</label>
              <input type="password" class="form-control" placeholder="Votre mot de passe" name="password" required=""/><br>
            <button class="btn" type="submit">Se connecter</button>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>