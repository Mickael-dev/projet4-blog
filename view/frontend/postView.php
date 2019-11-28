<?php $title = htmlspecialchars($post->getTitle()); ?>

<?php ob_start(); ?>

<section class="intro-inner-page flex-container">
	<div class="item-center">
		<h1>
			<?php echo htmlspecialchars($post->getTitle()); ?>
		</h1>
		<p>
			<em>le <?php echo $post->getCreation_date_fr(); ?></em>
		</p>
	</div>
</section>

<section class="ptl pbl">
	<div class="wrapper">

		<p>
			<?php
			echo nl2br(htmlspecialchars($post->getContent()));
			?>
		</p>

		<h2>Commentaires</h2>


		<?php foreach ($comments as $comment): ?>
		<div class="comment">
			<p>Commentaire laissé par : <?= htmlspecialchars($comment->getAuthor()); ?></p>
			<p><em>le <?= $comment->getComment_date_fr(); ?></em></p>
			<p><?= nl2br(htmlspecialchars($comment->getComment())); ?></p>
			<p><em><a href="">Signaler ce commentaire</a></em></p>
		</div>

		<?php endforeach ;?>

		<h3>Laisser un commentaire</h3>
		<form action="index.php?action=addComment&amp;id=<?= $post->getId();?>" method="post">
			<div>
				<label for="author">Auteur</label><br />
				<input type="text" id="author" name="author" />
			</div>
			<div>
				<label for="comment">Commentaire</label><br />
				<textarea id="comment" name="comment"></textarea>
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>