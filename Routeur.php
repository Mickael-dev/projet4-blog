<?php

session_start();

class Routeur
{
	protected $frontend;

	public function __construct()
	{
		$this->frontend = new Frontend();
		$this->backend = new Backend();
	}

	public function routerRequete()
	{
		try { // On essaie de faire des choses
			if (isset($_GET['action'])) 
			{
				switch ($_GET['action'])
				{

						/********
						//////////AFFICHAGE DE TOUS LES POSTES//////////
						********/

					case 'listPosts':
						$this->frontend->listPosts();
						break;

						/********
						//////////AFFICHAGE D'UN POST//////////
						********/

					case 'post':
						if (isset($_GET['id']) && $_GET['id'] > 0) 
						{
							$this->frontend->post();
						}
						else 
						{
							// Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
							throw new Exception('Aucun identifiant de billet envoyé');
						}
						break;

						/********
						//////////AJOUT D'UN COMMENTAIRE//////////
						********/

					case 'addComment':
						if (isset($_GET['id'])&& $_GET['id'] >0)
						{
							if (!empty($_POST['author']) && !empty($_POST['comment'] && !ctype_space($_POST['author']) && !ctype_space($_POST['comment']) ))
							{
								$this->frontend->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
							}
							else
							{
								throw new Exception('Tous les champs ne sont pas remplis !');
							}
						}
						else
						{
							throw new Exception('Aucun identifiant de billet envoyé');
						}
						break;

						/********
						//////////CONNEXION//////////
						********/

					case 'signin':
						$this->backend->signin($_POST['login'], $_POST['password']);
						break;

						/********
						//////////AFFICHAGE DASHBOARD ADMIN//////////
						********/

					case 'admin':
						if(isset($_SESSION['admin']))
						{
							$this->backend->homeAdmin();
						}
						else
						{
							header('Location: index.php?action=loginAdmin');
						}
						break;


						/********
						//////////AFFICHAGE DE LA PAGE DE CONNEXION//////////
						********/
					case 'loginAdmin':
						$this->backend->loginAdmin();
						break;
						
						/********
						//////////AFFICHAGE DE LA PAGE CREATION DE POST//////////
						********/

					case 'newPost';
						$this->backend->createPost();
						break;

					default:
						$this->frontend->listPosts();
						break;
				}
			}
			else 
			{
				$this->frontend->listPosts();
			}
		}
		catch(Exception $e) 
		{ // S'il y a eu une erreur, alors...
			echo 'Erreur : ' . $e->getMessage();
		}

	}
}