<?php $title = 'Administration du blog'; ?>

<?php ob_start(); ?>


<section class="intro-inner-page flex-container">
	<div class="item-center">
		<h1>
			Administration du blog
		</h1>
	</div>
</section>

<section class="ptl pbl">
   <div class="wrapper">
       <h2>Billets postés</h2>
    <table class="table" summary="">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Titre</th>
                <th scope="col">Contenu</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($posts as $post):?>
            <tr>
                <td><?= $post->getCreation_date_fr();?></td>
                <td><?= htmlspecialchars($post->getTitle());?></td>
                <td><?= substr($post->getContent(),0,200); ?></td>
                <td> <button class="btn">Modifier</button><br>
                    <span class="btn--danger" role="button">Supprimer</span></td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>
    <div>
        <a href="index.php?action=newPost" class="btn">Rédiger un billet</a>
    </div>
   </div>
    
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>