<?php

class Frontend
{
	// creer classes, post, comment
	// créer des attributs et instancier dans le constructeur
	protected $post;
	protected $comment;

	public function __construct()
	{
		$this->post = new PostManager();
		$this->comment = new CommentManager();
	}

	function listPosts()
	{

		$posts = $this->post->getPosts(); // Appel d'une fonction de cet objet

		require('view/frontend/listPostsView.php');
	}

	function post()
	{
		$post = $this->post->getPost($_GET['id']);
		$comments = $this->comment->getComments($_GET['id']);

		require('view/frontend/postView.php');
	}

	function addComment($postId, $author, $comment)
	{


		$affectedLines = $this->comment->postComment($postId, $author, $comment);

		if ($affectedLines === false) {
			throw new Exception('Impossible d\'ajouter le commentaire !');
		}
		else {
			header('Location: index.php?action=post&id=' . $postId);
		}
	}
}

