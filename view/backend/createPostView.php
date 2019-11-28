<?php $title = 'Créer un nouveau billet'; ?>

<?php ob_start(); ?>


<section class="intro-inner-page flex-container">
    <div class="item-center">
        <h1>
            Créer un nouveau billet
        </h1>
    </div>
</section>

<section class="ptl pbl">
    <div class="wrapper">
        <form method="post">
            <textarea id="mytextarea" name="mytextarea">Hello, World!</textarea>
        </form>
    </div>

</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>