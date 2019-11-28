<?php $title = 'Accueil blog'; ?>

<?php ob_start(); ?>

<section class="intro flex-container">
	<div class="item-center txtcenter">
		<h1>Billet simple pour l'Alaska</h1>
		<p>par Jean Forteroche</p>
	</div>

</section>

<section class="ptl pbl" id="chapitres">
	<div class="wrapper grid-3 has-gutter-l">

		<?php foreach ($posts as $post):?>

		<article>
			<h2>
				<?php echo htmlspecialchars($post->getTitle()); ?><br>
			</h2>
			<p class="content">
				<em>le <?php echo $post->getCreation_date_fr();?></em>
			</p>

			<p>
				<?php
			// On affiche le contenu du billet
			echo nl2br(htmlspecialchars($post->getContent())); ?>
			</p>
			<p>
				<a class="btn" href="index.php?action=post&amp;id=<?=$post->getID(); ?>">Lire la suite</a>
			</p>

		</article>

		<?php endforeach;?>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>