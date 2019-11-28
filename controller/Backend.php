<?php

class Backend
{
	// creer classes, post, comment
	// créer des attributs et instancier dans le constructeur
	protected $post;
	protected $comment;
	protected $user;

	public function __construct()
	{
		$this->post = new PostManager();
		$this->comment = new CommentManager();
		$this->user = new UserManager();
	}

	public function homeAdmin()
	{

		$posts = $this->post->getPosts();
		//$comments = $this->comment->getComments();

		require('view/backend/dashboardView.php');
	}

	public function loginAdmin()
	{

		require('view/frontend/loginView.php');
	}

	public function createPost()
	{
		require('view/backend/createPostView.php');
	}
	
	

	public function signin($login,$password)
	{
		$user = $this->user->getUsername($login,$password);
		if($user)
		{
			$_SESSION['admin'] = $user;
			header('Location:index.php?action=admin');
		}
		else
		{
			throw new Exception('Mauvaise saisie de l\'identifiant ou du mot de passe');
		}
	}

}